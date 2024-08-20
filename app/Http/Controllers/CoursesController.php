<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CourseModule;
use App\Models\Courses;
use App\Models\Enrolled;
use App\Models\Subsection;
use App\Models\SubsectionCompleted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index()
    {
        $student = Auth::user();
        $courses = Courses::where('level', $student->class_attended)->get();

        $coursesWithProgress = $courses->map(function ($course) use ($student) {
            $studentsStartedCourse = collect();

            $subsections = $course->subsections->map(function ($subsection) use ($studentsStartedCourse) {
                $startedBy = SubsectionCompleted::where('subsection_id', $subsection->id)
                    ->join('students', 'subsections_completed.student_id', '=', 'students.id')
                    ->get(['students.name', 'students.profile_pic']); // Assuming students table has 'avatar' field

                // Add unique students to the collection
                $startedBy->each(function ($student) use ($studentsStartedCourse) {
                    $studentsStartedCourse->put($student->name, $student);
                });

                $subsection->startedBy = $startedBy;
                return $subsection;
            });

            // Existing logic for progress and status
            $completedSubsectionsCount = SubsectionCompleted::where('student_id', $student->id)
                ->whereIn('subsection_id', $subsections->pluck('id'))
                ->count();
            $totalSubsectionsCount = $subsections->count();

            if ($completedSubsectionsCount === 0) {
                $course->status = 'Not Started';
                $course->progress = 0;
                $course->progressColor = 'bg-secondary';
                $course->badgeColor = 'badge-secondary';
            } elseif ($completedSubsectionsCount === $totalSubsectionsCount) {
                $course->status = 'Completed';
                $course->progress = 100;
                $course->progressColor = 'bg-success';
                $course->badgeColor = 'badge-success';
            } else {
                $course->status = 'In Progress';
                $course->progress = ($completedSubsectionsCount / $totalSubsectionsCount) * 100;
                $course->progressColor = 'bg-primary'; // You can change this to the desired color for "In Progress"
                $course->badgeColor = 'badge-primary';
            }

            // Attach the unique students collection to the course
            $course->studentsStartedCourse = $studentsStartedCourse;

            return $course;
        });

        return view('pages.courses.index', compact('coursesWithProgress'));
    }

    public function level()
    {
        // Assuming Auth::user()->class_attended is the level of the course
        $userClassAttended = Auth::user()->class_attended;

        // Fetch courses that match the user's attended class level and load subsections
        $courses = Courses::where('level', $userClassAttended)
            ->with('subsections')
            ->get();

        // Pass the filtered courses to the view
        return view('pages.courses.level', compact('courses'));
    }
    public function setDetail(Request $request)
    {
        // Store the course ID in the session
        session(['course_id' => $request->input('course_id')]);

        // Redirect to the clean URL
        return redirect()->route('courses.detail');
    }

    public function detail()
    {
        $courseId = session('course_id');
        $course = Courses::with(['subsections' => function ($query) {
            $query->orderBy('order'); // Ensure subsections are ordered
        }])->findOrFail($courseId);

        $userId = Auth::id();

        // Fetch the user's completed subsections
        $completedSubsections = Enrolled::where('students_id', $userId)
            ->pluck('subsection_id');

        // Determine if the user has completed the previous subsection
        foreach ($course->subsections as $subsection) {
            $subsection->can_access = true; // Default to true
            if ($subsection->order > 1) {
                // Find the previous subsection
                $previousSubsection = $course->subsections->where('order', $subsection->order - 1)->first();
                if ($previousSubsection && !$completedSubsections->contains($previousSubsection->id)) {
                    $subsection->can_access = false;
                }
            }
        }

        return view('pages.courses.detail', compact('course'));
    }

    public function show($id)
    {
        $studentId = Auth::id();

        // Fetch the subsection
        $subsection = Subsection::with(['courseModule', 'comments.students'])->findOrFail($id);

        // Fetch the course module based on the course_id
        $courseModule = CourseModule::where('id', $subsection->course_id)->firstOrFail();

        // Get the last subsection for the course
        $lastSubsection = Subsection::where('course_id', $subsection->course_id)
            ->orderBy('order', 'desc')
            ->first();

        // Check if the last subsection is completed by the student
        $isCompleted = SubsectionCompleted::where('subsection_id', $lastSubsection->id)
            ->where('student_id', $studentId)
            ->exists();

        return view('pages.courses.course', compact('subsection', 'courseModule', 'isCompleted', 'lastSubsection'));
    }

    public function list()
    {
        $courses = Courses::all();
        return view('pages.courses.list', compact('courses'));
    }
    //commenting func

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'comment' => 'required|string',
            'subsection_id' => 'required|exists:subsection,id',
            'parent_id' => 'nullable|integer|exists:comments,id', // Validate if it's a valid comment ID for replies
        ]);

        // Create and save the comment
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->subsection_id = $request->subsection_id;
        $comment->parent_id = $request->parent_id; // Set parent_id if it's a reply
        $comment->students_id = auth()->id(); // Assuming the student is logged in
        $comment->save();

        // Redirect back to the subsection page
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
    public function markSubsectionDone($subsectionId)
    {
        $studentId = Auth::id(); // Assuming the user is authenticated

        // Check if the subsection is already marked as completed by this student
        $alreadyCompleted = SubsectionCompleted::where('subsection_id', $subsectionId)
            ->where('student_id', $studentId)
            ->exists();

        if (!$alreadyCompleted) {
            // Mark the subsection as done
            SubsectionCompleted::create([
                'subsection_id' => $subsectionId,
                'student_id' => $studentId,
            ]);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Subsection marked as done!');
        }

        // If already completed, return with a message
        return redirect()->back()->with('info', 'You have already completed this subsection.');
    }

}

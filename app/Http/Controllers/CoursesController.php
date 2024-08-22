<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\ClaimedBadge;
use App\Models\Comment;
use App\Models\CourseModule;
use App\Models\Courses;
use App\Models\ModuleCompleted;
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
            $query->orderBy('order') // Ensure subsections are ordered
                ->with('badges');
        }])->findOrFail($courseId);

        $userId = Auth::id();

        // Fetch the user's completed subsections using the SubsectionCompleted model
        $completedSubsections = SubsectionCompleted::where('student_id', $userId)
            ->pluck('subsection_id');

        $claimedBadges = ClaimedBadge::where('student_id', $userId)
            ->pluck('badge_id');

        // Determine if the user has completed the previous subsection
        foreach ($course->subsections as $subsection) {
            if ($subsection->order == 1) {
                // The first subsection is always accessible
                $subsection->can_access = true;
            } else {
                // Check if the previous subsection is completed
                $previousSubsection = $course->subsections->where('order', $subsection->order - 1)->first();
                if ($previousSubsection && !$completedSubsections->contains($previousSubsection->id)) {
                    $subsection->can_access = false;
                } else {
                    $subsection->can_access = true;
                }
            }

            // Calculate progress based on the course modules
            $courseModules = $subsection->courseModules;
            $completedModulesCount = $courseModules->filter(function ($module) use ($userId) {
                return $module->isCompletedBy($userId);
            })->count();

            $subsection->progress = $courseModules->count() > 0
            ? ($completedModulesCount / $courseModules->count()) * 100
            : 0;
        }

        return view('pages.courses.detail', compact('course', 'userId', 'claimedBadges'));
    }

    //claiming badges
    public function claimBadge(Request $request, $badgeId)
    {
        $userId = Auth::id();

        // Check if the badge has already been claimed
        $alreadyClaimed = ClaimedBadge::where('student_id', $userId)
            ->where('badge_id', $badgeId)
            ->exists();

        if ($alreadyClaimed) {
            return redirect()->back()->with('error', 'Badge already claimed');
        }

        // Create a new claimed badge entry
        ClaimedBadge::create([
            'student_id' => $userId,
            'badge_id' => $badgeId,
            'claimed_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Badge claimed successfully');
    }

    public function show($id)
    {
        // Retrieve the subsection with related courseModules and comments
        $subsection = Subsection::with(['courseModules', 'comments.students'])->findOrFail($id);

        // Get the authenticated student ID
        $studentId = Auth::id();

        // Retrieve completed module IDs for the student
        $completedModuleIds = auth()->user()->completedModules->pluck('course_module_id');

        // Get the course modules associated with this subsection
        $courseModules = $subsection->courseModules;

        // Check if all course modules in the subsection are completed
        $allModulesCompleted = $courseModules->every(function ($module) use ($completedModuleIds) {
            return $completedModuleIds->contains($module->id);
        });

        // Check if the subsection is completed by the student
        $isSubsectionCompleted = SubsectionCompleted::where('subsection_id', $subsection->id)
            ->where('student_id', $studentId)
            ->exists();

        // Calculate the count of completed modules for the logged-in student
        $completedModulesCount = $completedModuleIds->intersect($courseModules->pluck('id'))->count();

        // Calculate the progress percentage
        $totalModules = $courseModules->count();
        $progress = $totalModules > 0 ? ($completedModulesCount / $totalModules) * 100 : 0;

        // Get the course module associated with this subsection
        $courseModule = CourseModule::where('subsection_id', $subsection->id)->first();

        // Check if $courseModule is null
        if (!$courseModule) {
            return redirect()->back()->with('error', 'Course module not found.');
        }

        // Get the last subsection within the same course module
        $lastSubsection = $courseModule->subsections->sortByDesc('order')->first();

        // Check if the last subsection is completed by the student
        $isCompleted = $lastSubsection ? SubsectionCompleted::where('subsection_id', $lastSubsection->id)
            ->where('student_id', $studentId)
            ->exists() : false;

        // Check if the course module is marked as completed
        $isModuleCompleted = ModuleCompleted::where('course_module_id', $courseModule->id)
            ->where('student_id', $studentId)
            ->exists();

        // Return the view with variables
        return view('pages.courses.course', compact('subsection', 'courseModule', 'isCompleted', 'lastSubsection', 'isModuleCompleted', 'completedModuleIds', 'progress', 'totalModules', 'allModulesCompleted', 'isSubsectionCompleted'));
    }

    public function list()
    {
        $courses = Courses::with('students')->get();

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
    public function markModuleDone($id)
    {
        $studentId = Auth::id();

        // Check if the module is already marked as completed by this student
        $alreadyCompleted = ModuleCompleted::where('course_module_id', $id)
            ->where('student_id', $studentId)
            ->exists();

        if (!$alreadyCompleted) {
            // Mark the module as done
            ModuleCompleted::create([
                'course_module_id' => $id,
                'student_id' => $studentId,
                'completed_at' => now(), // Set the completion timestamp
            ]);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Course module marked as done!');
        }

        // If already completed, return with a message
        return redirect()->back()->with('info', 'You have already completed this module.');
    }

    public function completeSubsection($id)
    {
        // Get the authenticated student ID
        $studentId = Auth::id();

        // Find the subsection
        $subsection = Subsection::findOrFail($id);

        // Check if all course modules in the subsection are completed
        $courseModules = $subsection->courseModules;
        $completedModuleIds = auth()->user()->completedModules->pluck('course_module_id');

        $allModulesCompleted = $courseModules->every(function ($module) use ($completedModuleIds) {
            return $completedModuleIds->contains($module->id);
        });

        if ($allModulesCompleted) {
            // Mark the subsection as completed
            SubsectionCompleted::updateOrCreate(
                ['subsection_id' => $id, 'student_id' => $studentId],
                ['created_at' => now()]
            );

            return redirect()->back()->with('success', 'Course section completed successfully.');
        }

        return redirect()->back()->with('error', 'Not all modules are completed.');
    }

    //enrolled

    public function enrolled()
    {
        $courses = Courses::where('level', auth()->user()->class_attended)
            ->with('subsections')
            ->get();
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
                $course->progressColor = 'progress-secondary';
                $course->badgeColor = 'badge-secondary';
            } elseif ($completedSubsectionsCount === $totalSubsectionsCount) {
                $course->status = 'Completed';
                $course->progress = 100;
                $course->progressColor = 'progress-success';
                $course->badgeColor = 'badge-success';
            } else {
                $course->status = 'In Progress';
                $course->progress = ($completedSubsectionsCount / $totalSubsectionsCount) * 100;
                $course->progressColor = 'progress-primary'; // You can change this to the desired color for "In Progress"
                $course->badgeColor = 'badge-primary';
            }

            // Attach the unique students collection to the course
            $course->studentsStartedCourse = $studentsStartedCourse;

            return $course;
        });

        return view('pages.courses.enrolled', compact('coursesWithProgress'));
    }

    //progress
    public function progress()
    {
        $userId = Auth::id();

        // Fetch the user's claimed badges
        $claimedBadgeIds = ClaimedBadge::where('student_id', $userId)
            ->pluck('badge_id');

        // Fetch only the badges that have been claimed by the user
        $badges = Badge::whereIn('id', $claimedBadgeIds)->get();

        return view('pages.courses.progress', compact('badges'));
    }

}

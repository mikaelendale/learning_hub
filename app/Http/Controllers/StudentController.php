<?php
namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\StudentBadge;
use App\Models\User;
use App\Notifications\AdvancedNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class StudentController extends Controller
{
    /**
     * Award a badge to a student and send a notification.
     *
     * @param int $studentId
     * @param int $badgeId
     * @return \Illuminate\Http\Response
     */
    public function awardBadge($studentId, $badgeId)
    {
        $existingBadge = StudentBadge::where('student_id', $studentId)
            ->where('badge_id', $badgeId)
            ->first();

        if (!$existingBadge) {
            StudentBadge::create([
                'student_id' => $studentId,
                'badge_id' => $badgeId,
            ]);

            $badge = Badge::find($badgeId);
            $student = User::find($studentId);

            // Create and queue notification
            Notification::send($student, new AdvancedNotification($student, [
                'badge_name' => $badge->name,
                'badge_image' => $badge->image,
            ]));

            // Optionally, create a record in the database
            $this->createNotification($studentId, 'badge_awarded', [
                'badge_name' => $badge->name,
                'badge_image' => $badge->image,
            ]);
        }

        return response()->json(['message' => 'Badge awarded successfully.']);
    }

    /**
     * Create a notification record in the database.
     *
     * @param int $userId
     * @param string $type
     * @param array $data
     * @return void
     */
    protected function createNotification($userId, $type, $data)
    {
        DB::table('notifications')->insert([
            'user_id' => $userId,
            'type' => $type,
            'data' => json_encode($data),
            'is_sent' => false,
            'sent_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}


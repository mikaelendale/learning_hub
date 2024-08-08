<?php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([ 
            CourseSectionSeeder::class,
            SubSectionSeeder::class,
            LessonSeeder::class,
            AssignmentSeeder::class,
            SubmissionSeeder::class,
            ProgressSeeder::class,
            RankSeeder::class,
            LeaderboardSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            QuizSubmissionSeeder::class,
            ForumSeeder::class,
            ThreadSeeder::class,
            ReplySeeder::class,
            CertificateSeeder::class,
            NotificationSeeder::class,
            FeedbackSeeder::class,
            FeedbackResponseSeeder::class, 
        ]);
    }
}

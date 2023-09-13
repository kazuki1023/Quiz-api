<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quiz = [
            [
                'content' => 'この中で一緒の縦モクになったことない人は誰？',
                'img' => "sample1.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'dukkenとかずは同じ中高ですが、そんなdukkenと初めてクラスが一緒になったのはいつ？',
                'img' => "sample2.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'posse1で付き合うなら誰？って聞かれた時にいつも答えてる人は誰？',
                'img' => "sample3.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('quizzes')->insert($quiz);
    }
}

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
                'image' => "sample1.jpg",
                'supplement' => '夏のDXなつかし〜',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'dukkenとかずは同じ中高ですが、そんなdukkenと初めてクラスが一緒になったのはいつ？',
                'image' => "sample2.jpg",
                'supplement' => 'シンハ運営の時代',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'posse1で付き合うなら誰？って聞かれた時にいつも答えてる人は誰？',
                'image' => "sample3.jpg",
                'supplement' => 'これいつの写真？',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('quizzes')->insert($quiz);
    }
}

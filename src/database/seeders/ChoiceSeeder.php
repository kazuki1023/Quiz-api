<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $choices = [[
            'quiz_id' => 1,
            'answer' => 'あさか',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 1,
            'answer' => 'うみうみ',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 1,
            'answer' => 'そうたつ',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 2,
            'answer' => '中２',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 2,
            'answer' => '中３',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 2,
            'answer' => '高２',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 3,
            'answer' => 'ななみん',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 3,
            'answer' => 'うみうみ',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'quiz_id' => 3,
            'answer' => 'ちよちゃん',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]];
        DB::table("choices")->insert($choices);
    }
}

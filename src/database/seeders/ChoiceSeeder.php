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
            'question_id' => 1,
            'name' => 'あさか',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 1,
            'name' => 'うみうみ',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 1,
            'name' => 'そうたつ',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 2,
            'name' => '中２',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 2,
            'name' => '中３',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 2,
            'name' => '高２',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 3,
            'name' => 'ななみん',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 3,
            'name' => 'うみうみ',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 3,
            'name' => 'ちよちゃん',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]];
        DB::table("choices")->insert($choices);
    }
}

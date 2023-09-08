<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use App\Http\Resources\QuizResource;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::with('choices')->get();
        return QuizResource::collection($quizzes);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(QuizRequest $request)
    {
        $data = $request->validated();

        $quiz = Quiz::create([
            'content' => $data['content'],
            'img' => $data['img'],
        ]);

        foreach ($data['choices'] as $choiceData) {
            $quiz->choices()->create([
                'answer' => $choiceData['answer'],
                'valid' => $choiceData['valid'],
            ]);
        }

        return QuizResource::make($quiz->load('choices'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

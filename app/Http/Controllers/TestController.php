<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function showBundeslandList()
    {
        // Display all Bundesland options to choose from.
        return view('test.bundesland-list', [
            'bundeslands' => Question::$bundesland,
        ]);
    }

    public function startTest($bundesland)
    {
        // Fetch 30 general questions and 3 from the selected Bundesland, shuffle them
        $generalQuestions = Question::where('category', 'general')
            ->inRandomOrder()
            ->limit(30)
            ->with('answers')
            ->get();

        $stateQuestions = Question::where('state', $bundesland)
            ->inRandomOrder()
            ->limit(3)
            ->with('answers')
            ->get();

        $questions = $generalQuestions->concat($stateQuestions)->shuffle();

        // Store the questions in the session for review later
        Session::put('test_questions', $questions);
        $translation = app()->getLocale();
        return view('test.start', compact('questions', 'bundesland','translation'));
    }

    public function submitAnswer(Request $request)
    {
        $questions = Session::get('test_questions');
        $questionIndex = $request->input('question_index');
        $selectedAnswer = $request->input('answer_id');
        $correctAnswerId = $questions[$questionIndex]->answers->where('is_correct', 1)->first()->id;
        $isCorrect = $correctAnswerId === (int)$selectedAnswer;

        // Store the user's answer and correctness
        Session::push('test_answers', [
            'question_id' => $questions[$questionIndex]->id,
            'selected_answer' => $selectedAnswer,
            'is_correct' => $isCorrect,
        ]);

        return response()->json([
                                'is_correct' => $isCorrect,
                                'correct_answer_id' => $correctAnswerId
        ]);
    }

    public function reviewTest()
    {
        $testQuestions = Session::get('test_questions');
        $testAnswers = Session::get('test_answers', []);
        $correctAnswers = collect($testAnswers)->where('is_correct', true)->count();

        return view('test.review', compact('testQuestions', 'testAnswers', 'correctAnswers'));
    }
}

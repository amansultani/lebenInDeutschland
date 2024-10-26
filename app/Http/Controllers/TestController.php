<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function showBundeslandList()
    {
        return view('test.bundesland-list', [
            'bundeslands' => Question::$bundesland,
        ]);
    }

    public function startTest($bundesland)
    {
       
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

        $translation = app()->getLocale();
        return view('test.start', compact('questions', 'bundesland','translation'));
    }

}

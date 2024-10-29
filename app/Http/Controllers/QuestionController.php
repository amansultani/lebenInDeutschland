<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'state' => 'nullable|string|in:general,' . implode(',', Question::$bundesland),
        ]);
    
        // Extract 'state' from the validated data, defaulting to null if it's not present
        $state = $validatedData['state'] ?? null;
    
        // Initialize the query
        $questionsQuery = Question::with('answers'); 
    
        // Apply the appropriate filters
        if ($state === 'general') {
            $questionsQuery->byCategory('general'); 
            $state = "Deutschland 300 Fragen";
        } elseif ($state) {
            $questionsQuery->byState($state); 
        }
    
        
        $questions = $questionsQuery->get();
    
        return view('question.index', [
            'questions' => $questions,
            'state' => $state,
            'translation' =>app()->getLocale(),
        ]);
    
    }
}

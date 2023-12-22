<?php

namespace App\Http\Controllers;
use App\Models\Quiz;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
{
        $quizzes = Quiz::where('photo', '!=', null)
            ->orderBy('created_at', 'desc')
            ->where('status', 1)
            ->take(8)
            ->get();

        return view('quiz.index', compact('quizzes'));
}
}

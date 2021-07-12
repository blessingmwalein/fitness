<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserExerciseResource;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    public function index()
    {
        return  view('pages.exercise', ['exercises' => Exercise::all(), 'user_exercises' => Auth::user()->exercises]);
    }
}

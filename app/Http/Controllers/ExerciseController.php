<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return  view('pages.exercise', ['exercises' => Exercise::all()]);
    }
}

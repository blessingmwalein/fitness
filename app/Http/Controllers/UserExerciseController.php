<?php

namespace App\Http\Controllers;

use App\Models\UserExercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExerciseController extends Controller
{
    public function store(Request $request)
    {
       $data = $request->all();
       $data['user_id'] = Auth::user()->id;

      if(UserExercise::create($data)){
        return redirect('exercise')->with('message', 'New Exercise Added');
      }else {
        return redirect('exercise')->with('message', 'Error while creating exercise');
      }
    }
}

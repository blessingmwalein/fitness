<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\UserTrainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTrainerController extends Controller
{
    public function index()
    {
        return view('pages.schedule', ['trainers' => Trainer::all(), 'schedules' => Auth::user()->schedules]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;

        if(UserTrainer::create($data)){
           return redirect('/schedule')->with('message', 'New Schedule Added');
        }
    }
}

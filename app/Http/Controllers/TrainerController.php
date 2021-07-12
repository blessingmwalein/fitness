<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    public function index()
    {

        return  view('pages.personal_trainers', ['trainers' => Trainer::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:8',
            'image' => 'image|nullable'
        ]);

        $data['password'] = Hash::make($data['password']);

        $fileNameToStore="";

        if ($request->hasFile("image")) {
            $filenameWithExt = $request->file("image")->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file("image")->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file("image")->storeAs('public/image', $fileNameToStore);
        }
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        $data['image'] = $fileNameToStore;
        if(Trainer::create($data)){
            return redirect('/trainer-login')->with('message','Thanks for registering you can login');
        }else{
            return redirect('/trainer-register')->withSuccess('message','Error while registering try again');
        }
    }
}

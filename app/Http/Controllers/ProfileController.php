<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        // $patient = User::where('id', Auth::user()->id)->first();
        return view('profile.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
        ]);
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->description = $request->description;
        $user->update();

        return redirect()->back()->with('message', 'Profile updated successfully');
    }
}

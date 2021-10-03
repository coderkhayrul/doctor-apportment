<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        // User Validation
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
        ]);
        // Get Auth User id
        $id = Auth::user()->id;

        // User Update
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->description = $request->description;
        $user->update();

        return redirect()->back()->with('message', 'Profile updated successfully');
    }

    public function profilePic(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_image'), $name);
            // Old File/Image Remove
            $image_path = "profile_image/" . auth()->user()->image;
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            User::where('id', Auth::user()->id)->update([
                'image' => $name,
            ]);
            return redirect()->back()->with('message', 'Profile Image Update');
        }
    }
}

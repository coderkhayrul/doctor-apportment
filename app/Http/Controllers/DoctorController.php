<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.doctor.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=', 'patient')->get();
        return view('admin.doctor.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        // $image = $request->file('image');
        // $image_name = $image->hashName();
        // $image_location = public_path('/upload');
        // $image->move($image_location, $image_name);
        $image_name = (new User)->userAvatar($request);

        $doctor = new User();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = bcrypt($request->password);
        $doctor->role_id = $request->role_id;
        $doctor->address = $request->address;
        $doctor->phone_number = $request->phone_number;
        $doctor->department = $request->department;
        $doctor->education = $request->education;
        $doctor->description = $request->description;
        $doctor->gender = $request->gender;
        $doctor->image = $image_name;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        unlink(public_path('/upload') . '/' . $user->image);
        $user->delete();
        // abort(401);

        return back()->with('message', 'Doctor Delete Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        return view('admin.doctor.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->hasFile('image')) {
            unlink(public_path('/upload') . '/' . $user->image);
            // $image = $request->file('image');
            // $image_name = $image->hashName();
            // $image_location = public_path('/upload');
            // $image->move($image_location, $image_name);
            $image_name = (new User)->userAvatar($request);
        } else {
            $image_name = $user->image;
        }

        if ($request->password) {
            $user->password = bcrypt($request->password);
        } else {
            $user->password = $user->password;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->department = $request->department;
        $user->education = $request->education;
        $user->gender = $request->gender;
        $user->description = $request->description;
        $user->image = $image_name;
        $user->update();

        return redirect()->route('doctor.index')->with('message', 'Doctor Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

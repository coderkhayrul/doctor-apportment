<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::where('name', 'doctor')->first();
        $doctors = User::where('role_id', '=', $role->id)->get();

        return view('admin.doctor.index', compact('doctors'));
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
        $image = $request->file('image');
        $image_name = $image->hashName();
        $image_location = public_path('/upload');
        $image->move($image_location, $image_name);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

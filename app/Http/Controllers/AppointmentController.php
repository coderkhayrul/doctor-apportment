<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
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
        $myappointments = Appointment::latest()->where('user_id', Auth::user()->id)->get();
        return view('admin.appointment.index', compact('myappointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->date = $request->date;
        $appointment->save();
        foreach ($request->time as $time) {
            $time_m = new Time();
            $time_m->appointment_id = $appointment->id;
            $time_m->time = $time;
            // $time_m->status = 0;
            $time_m->save();
        }
        return redirect()->back()->with('message', 'Appointment Create for ' . $request->date);
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

    public function appointmentCheck(Request $request)
    {
        $date = $request->date;
        $appointment = Appointment::where('date', $date)->where('user_id', Auth::user()->id)->first();
        // dd($appointment);
        if (!$appointment) {
            return redirect()->to('/appointment')->with('errormessage', 'Appointment Time Not Available For This Date');
        }
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id', $appointmentId)->get();

        return view('admin.appointment.index', compact('appointmentId', 'times', 'date'));
    }

    public function appointmentTimeUpdate(Request $request)
    {
        // dd($request->all());
        $appointmentId = $request->appointmentId;
        $appointment = Time::where('appointment_id', $appointmentId)->delete();
        foreach ($request->time as $time) {
            $time_m = new Time();
            $time_m->appointment_id = $request->appointmentId;
            $time_m->time = $time;
            // $time_m->status = 0;
            $time_m->save();
        }
        return redirect()->route('appointment.index')->with('message', 'Appointment Updated successfully');
    }
}

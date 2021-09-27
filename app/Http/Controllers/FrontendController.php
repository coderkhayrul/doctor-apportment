<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        date_default_timezone_set('Asia/Dhaka');
        if (request('date')) {
            $doctors = $this->FindDoctorBasedOnDate(request('date'));
            return view('welcome', compact('doctors'));
        }
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        return view('welcome', compact('doctors'));
    }

    public function show($doctorId, $date)
    {
        $appoinment = Appointment::where('user_id', $doctorId)->where('date', $date)->first();
        $times = Time::where('appointment_id', $appoinment->id)->where('status', 0)->get();
        $user = User::where('id', $doctorId)->first();
        $doctorId = $doctorId;
        return view('appoinment', compact('times', 'date', 'user', 'doctorId'));
    }
    public function FindDoctorBasedOnDate($date)
    {
        $doctors = Appointment::where('date', $date)->get();
        return $doctors;
    }
}

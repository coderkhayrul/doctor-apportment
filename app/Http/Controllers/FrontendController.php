<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Dhaka');

        // Appointment Validation
        $request->validate(['time' => 'required']);
        $check = $this->checkBookingTimeInterval();
        if ($check) {
            return redirect()->back()->with('errormessage', "You Already Have Appoiment , Please Wait to Make Next");
        }

        // Appointment Booking
        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->doctor_id = $request->doctorId;
        $booking->time = $request->time;
        $booking->status = 0;
        $booking->date = $request->date;
        $booking->save();

        // Time Status Update
        Time::where('appointment_id', $request->appointment_id)
            ->where('time', $request->time)
            ->update(['status' => 1]);
        // Send Email Notification
        $doctorName = User::where('id', $request->doctorId)->first();
        $mailData = [
            'name' => Auth::user()->name,
            'time' => $request->time,
            'date' => $request->date,
            'doctorName' => $doctorName->name,

        ];
        // dd($doctorName);
        try {
            \Mail::to(Auth::user()->email)->send(new AppointmentMail($mailData));
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->back()->with('message', "Your Appointment Was Booked");
    }

    // Check Booking Time Or Date
    public function checkBookingTimeInterval()
    {
        return Booking::orderBy('id', 'DESC')
            ->where('user_id', Auth::user()->id)
            ->whereDate('created_at', date('Y-m-d'))
            ->exists();
    }

    public function mybooking()
    {
        $appointments = Booking::where('user_id', Auth::user()->id)->latest()->get();
        return view('booking.index', compact('appointments'));
    }

    public function doctorToday(Request $request)
    {
        $doctors = Appointment::with('doctor')->whereDate('date', date('Y-m-d'))->get();
        return $doctors;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Dhaka');
        $bookings = Booking::where('date', date('Y-m-d'))->where('doctor_id', auth()->user()->id)->where('status', 1)->get();
        return view('admin.prescription.index', compact('bookings'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['medicien'] = implode(',', $request->medicien);
        Prescription::create($data);

        return redirect()->back()->with('message', 'Prescription Create Successfully');
    }

    public function show($userId, $date)
    {
        $prescription = Prescription::Where('user_id', $userId)->where('date', $date)->first();

        return view('admin.prescription.show', compact('prescription'));
    }
}

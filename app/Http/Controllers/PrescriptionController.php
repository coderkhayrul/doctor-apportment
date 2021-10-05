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
        $bookings = Booking::where('date', date('Y-m-d'))->where('status', 1)->get();
        return view('admin.prescription.index', compact('bookings'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['medicien'] = implode(',', $request->medicien);
        Prescription::create($data);

        return redirect()->back()->with('message', 'Prescription Create Successfully');
    }
}

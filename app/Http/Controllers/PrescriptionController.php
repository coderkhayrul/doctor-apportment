<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Dhaka');
        $bookings = Booking::where('date', date('Y-m-d'))->where('status', 1)->get();
        return view('admin.prescription.index', compact('bookings'));
    }
}

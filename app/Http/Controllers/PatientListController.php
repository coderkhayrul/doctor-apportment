<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class PatientListController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Dhaka');

        $bookings = Booking::latest()->where('date', date('Y-m-d'))->get();
        return view('admin.patientlist.index', compact('bookings'));
    }
}

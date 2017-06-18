<?php

namespace App\Http\Controllers;

use DB;
use App\Main;
use App\Booking;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	$main = Main::all();
    	$booking = Booking::all();
    	return view('main')->with('mains', $main)->with('bookings', $booking);
    }

    public function indexLaporan()
    {
    	$main = Main::all();
    	$booking = DB::table('booking')->orderBy('checkIn', 'desc')->get();
        return view('laporanBooking')->with('mains', $main)->with('bookings', $booking);
    }
}

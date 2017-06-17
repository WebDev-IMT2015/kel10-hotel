<?php

namespace App\Http\Controllers;

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
}

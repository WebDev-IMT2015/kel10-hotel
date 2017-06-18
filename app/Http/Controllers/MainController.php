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

  	public function create(Request $request)
	{
		$namaDepan = $request->input('namaDepan');
		$namaBelakang = $request->input('namaBelakang');
		$email = $request->input('email');
		$noTelp = $request->input('noTelp');
		$negaraAsal = $request->input('negaraAsal');
		$jenisKamar = $request->input('jenisKamar');
		$checkIn = $request->input('checkIn');
		$checkOut = $request->input('checkOut');

		$bookingRoom= new Booking;
		$bookingRoom->checkIn=$checkIn;
		$bookingRoom->checkOut=$checkOut;
		$bookingRoom->namaDepan=$namaDepan;
		$bookingRoom->namaBelakang=$namaBelakang;
		$bookingRoom->email=$email;
		$bookingRoom->no_telp=$noTelp;
		$bookingRoom->ntt=$negaraAsal;
		$bookingRoom->save();
		return redirect('/');
	}
}

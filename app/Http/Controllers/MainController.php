<?php

namespace App\Http\Controllers;

use DB;
use App\Main;
use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $main = Main::all();
            $booking = Booking::all();
            return view('main')->with('mains', $main)->with('bookings', $booking);
        }
        else
        {
            return view('auth/login');
        }
    	
    }

    public function indexLaporan()
    {
        if(Auth::check())
        {
            $main = Main::all();
            $booking = DB::table('booking')->orderBy('checkIn', 'desc')->get();
            return view('laporanBooking')->with('mains', $main)->with('bookings', $booking);
        }
        else
        {
            return view('auth/login');
        }
    }
    
    public function indexCs()
    {
        if(Auth::check())
        {
            $user = User::all();
            return view('csList')->with('csList', $user);
        }
        else
        {
            return view('auth/login');
        }
    }

    // public function print()
    // {
    // 	$main = Main::all();
    // 	$booking = Booking::all();
    // 	return view('halamanPrint')->with('mains', $main)->with('bookings', $booking);
    // }

  	public function create(Request $request)
	{
        if(Auth::check())
        {
            $id_kamar = $request->input('id_kamar');
            $namaDepan = $request->input('namaDepan');
            $namaBelakang = $request->input('namaBelakang');
            $email = $request->input('email');
            $noTelp = $request->input('noTelp');
            $negaraAsal = $request->input('negaraAsal');
            $jenisKamar = $request->input('jenisKamar');
            $checkIn = $request->input('checkIn');
            $checkOut = $request->input('checkOut');

            $bookingRoom = new Booking;
            $bookingRoom->id_kamar = $id_kamar;
            $bookingRoom->checkIn = $checkIn;
            $bookingRoom->checkOut = $checkOut;
            $bookingRoom->namaDepan = $namaDepan;
            $bookingRoom->namaBelakang = $namaBelakang;
            $bookingRoom->email = $email;
            $bookingRoom->no_telp = $noTelp;
            $bookingRoom->ntt = $negaraAsal;
            $bookingRoom->save();
            return redirect('/');
        }
        else
        {
            return view('auth/login');
        }
	}

    public function update(Request $request)
    {
        if(Auth::check())
        {
            $id = $request->input('id');
            $booking = Booking::find($id);
            $booking->checkOut = $request->input('checkOut');
            $booking->save();
            return redirect('main');
        }
        else
        {
            return view('auth/login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	if(!Auth::check())
    	{
    		return redirect('login');
    	}
    	else
    	{
	    	$main = Main::all();
	    	return view('main')->with('mains', $main);
    	}
    }
}

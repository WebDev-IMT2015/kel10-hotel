<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	$main = Main::all();
    	return view('main')->with('mains', $main);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function index()
    {
    	$registerUser = User::all();
    	return view('registerUser')->with('registerUser', $registerUser);
    }

    public function create(Request $request)
	{
		$name = $request->input('name');
		$username = $request->input('username');
		$password = $request->input('password');
		$cyptpassword=bcrypt($password);
		$registerUser= new User;
		$registerUser->name=$name;
		$registerUser->username=$username;
		$registerUser->password=$cyptpassword;
		$registerUser->authentication='0';
		$registerUser->save();
		return redirect('registerUser');
	}
   
}

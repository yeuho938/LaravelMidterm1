<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tour;
class UserController extends Controller
{
	function home(){
		$tourUser = Tour::all();
		return view('user.home',['tourusers'=>$tourUser]);
	}
}

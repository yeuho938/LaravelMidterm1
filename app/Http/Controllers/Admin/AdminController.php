<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tour;

class AdminController extends Controller
{
	function create(){
		return view('admin.create');
	}
	function index(){
		$tour = Tour::all();
		return view('admin.index',['tours'=>$tour]);
	}
	function store(Request $request){
		$name = $request->name;
	    $file = $request->file("image")->store("public");
		$typetour =$request->typetour;
		$schedule = $request->schedule;
		$depart =$request->depart;
		$number= $request->number;
		$price=$request->price;
		$request->validate([
			'name'=> 'required|unique:tours|max:255',
			'price'=>'required',
			'image'=>'required',
			'depart'=>'required',
			'number'=>'required',
			'typetour'=>'required',

		]);
		$tour = new Tour();
		$tour->name =$name;
		$tour->image =$file;
		$tour->typetour =$typetour;
		$tour->schedule =$schedule;
		$tour->depart =$depart;
		$tour->number =$number;
		$tour->price = $price;
		$tour->save();
		return redirect('/tour');

	}
}

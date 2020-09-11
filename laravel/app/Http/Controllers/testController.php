<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
	public function __construct(){
		//$this ->middleware('test');
	}

	public  function test() {
		return view('test');
	}
	public  function about() {
		return view('about');
	}

    //
}

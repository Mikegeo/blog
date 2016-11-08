<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
   public function home()
   {
      $people = ['Mike','Mikey','Michael'];
	
	  return view ('welcome')->with('people', $people);
   }
	
	public function about()
	{
		return view('about');
	}
	
}

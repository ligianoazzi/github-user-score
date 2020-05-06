<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
   	public function open()
   	{
   		return "hi - by open";
   	}


   	public function closed()
   	{
   		return "hi - by closed";
   	}   	
}

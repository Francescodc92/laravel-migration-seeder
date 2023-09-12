<?php

namespace App\Http\Controllers\Guest;
//models
use App\Models\Train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index() 
   {
    $trains = Train::all();
    
    return view('home', compact('trains'));
   }
}

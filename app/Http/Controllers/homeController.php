<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Add this line to import the Product model

class HomeController extends Controller
{
    function index(){
        $Products=product::all();
        $Allproduct = product::where('new','=',1)->get();
        return view('home', compact('Products','Allproduct'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index(){
        return view('handyman.furniture');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarpentryController extends Controller
{
    public function index(){
        return view('handyman.carpentry');
    }
}

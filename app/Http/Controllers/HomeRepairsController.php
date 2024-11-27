<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeRepairsController extends Controller
{
    public function index(){
        return view('handyman.homeRepairs');
    }
}

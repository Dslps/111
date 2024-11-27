<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrivalRepairController extends Controller
{
    public function index(){
        return view('handyman.drivalRepair');
    }
}

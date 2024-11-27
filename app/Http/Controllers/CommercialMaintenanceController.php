<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommercialMaintenanceController extends Controller
{
    public function index(){
        return view('handyman.commercialMaintenance');
    }
}

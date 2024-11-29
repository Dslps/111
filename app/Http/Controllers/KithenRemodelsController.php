<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KithenRemodelsController extends Controller
{
    public function index(){
        return view('remodeling.kithen-remodels');
    }
}

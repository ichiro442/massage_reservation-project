<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    function create(){
        return view('home.reservation');
    }
    function confirm(){
        return view('home.confirm');
    }

}

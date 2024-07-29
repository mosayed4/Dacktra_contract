<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
        public function index(){

            return view('user_area.join_us');
        }
}

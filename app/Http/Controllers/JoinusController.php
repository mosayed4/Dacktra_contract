<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinusController extends Controller
{
    public function showEnglishForm(){

        return view('user_area.join_us_en');
    }
    
    public function showArabicForm()
       {
        return view('user_area.join_us_ar');

        }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayAppController extends Controller
{
    
    public function create()
    {
        return view('holiday.holidayApplication');
    }
    
    
    
}

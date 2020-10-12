<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayAppController extends Controller
{
    
    //admin共通
    public function index()
    {
        return view('holiday.index');
    }
    
    public function create()
    {
        return view('holiday.create');
    }
    
    public function store()
    {
        return redirect('holiday/holiday_applications/new');
    }
    
    public function duration()
    {
        return $this;
    }
    
    //admin共通
    public function show()
    {
        return view('holiday.show');
    }
    
    public function edit()
    {
        return view('holiday.edit');
    }
    
    public function update()
    {
        return redirect('holiday/holiday_applications/{holidayApplication}/edit');
    }
    
    
    
}

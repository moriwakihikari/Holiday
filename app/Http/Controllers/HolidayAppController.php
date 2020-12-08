<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HolidayApplication;
use App\Http\Request\HolidayAppPostRequest;
use App\Http\Request\SearchIndexReq;
use Illuminate\Support\Facades\Auth;
use App\Services\HolidayAppService;
use App\Services\HolidaySpanService;

class HolidayAppController extends Controller
{
    
    protected $holidayAppService;
    protected $holidaySpanService;
    
    public function __construct(HolidayAppService $holidayAppService, HolidaySpanService $holidaySpanService)
    {
        $this->holidayAppService = $holidayAppService;
        $this->holidaySpanService = $holidaySpanService;
    }
    
    //admin共通
    public function index()
    {
        return view('holiday.index');
    }
    
    public function create(Holidayapplication $holidayApplication)
    {
        $mode = 'new';
        return view('holiday.create', compact('holidayApplication', 'mode'));
    }
    
    public function store(HolidayAppPostRequest $req)
    {
        $parmas = $req->all();
        $this->holidayAppService->storeHoliday($params);
        
        return redirect('holiday/holiday_applications');
    }
    
    public function duration(Request $req)
    {
        $form = $req->all();
        $to = $req->all();
        $days = $this->holidaySpanService->getDuration($form, $to);
        return $days;
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

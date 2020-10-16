@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-tabs">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link adtive" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one=home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">
                            Your Dashboard
                        </a>
                    </li>
                </ul>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">休暇申請一覧</div>
                        <div class="card-body">
                            <table class="table table-striped table-bordred">
                                <tr>
                                    <th style="width:10%">従業員ID</th>
                                    <th style="width:10%">提出日</th>
                                    <th style="width:10%">休暇種別</th>
                                    <th style="width:20%">理由</th>
                                    <th style="width:20%">備考</th>
                                </tr>
                                @foreach(App\HolidayApplication::all() as $holidayApplication)
                                <tr>
                                    <td>{{$holidayApplication->employee->last_name . $holidayApplication->employee->first_name}}</td>
                                    <td>{{$holidayApplication->submit_datetime}}</td>
                                    <td>{{$holidayApplication->holiday_type->holiday_type_name}}</td>
                                    <td>{{$holidayApplication->reason}}</td>
                                    <td>{{$holidayApplication->remarks}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

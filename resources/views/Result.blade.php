@extends('layout')
@section('content')

<div class="nk-block-head pb-0">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">
            ผลคะแนนทดสอบ {{$result->type}}
        </h4>
        <p>
        ผลคะแนนทดสอบ {{$result->type}}
        </p>
    </div>
</div>

<hr>

<div class="nk-block">
    <div class="row g-gs">
        <div class="col-xxl-10">
            <div class="row g-gs">
                <div class="col-lg-8 col-xxl-8">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-title-group align-start mb-2">
                                <div class="card-title">
                                    <h6 class="title">ข้อมูล</h6>
                                    <p>ข้อมูลพื้นฐานผู้สอบ</p>
                                </div>
                                <div class="card-tools"><em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Revenue from subscription" data-bs-original-title="Revenue from subscription"></em></div>
                            </div>
                            <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <table class="table table-bordered mx-2 my-2">
                                    
                                    <tbody>
                                        <tr>
                                            <td>ชื่อ</td>
                                            <td>{{ $result->firstname }} </td>
                                        </tr>
                                        <tr>
                                            <td>นามสกุล</td>
                                            <td>{{ $result->lastname }} </td>
                                        </tr>
                                        <tr>
                                            <td>รหัสนักศึกษา</td>
                                            <td>{{ $result->stucode }} </td>
                                        </tr>
                                        <tr>
                                            <td>ชื่อเล่น</td>
                                            <td>{{ $result->nickname }} </td>
                                        </tr>
                                        <tr>
                                            <td>อีเมล</td>
                                            <td>{{ $result->email }} </td>
                                        </tr>
                                        <tr>
                                            <td>วันเวลาที่ทดสอบ</td>
                                            <td>{{ $result->date_test }} </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-4">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-title-group align-start mb-2">
                                <div class="card-title">
                                    <h6 class="title">ผลคะแนนทดสอบ</h6>
                                </div>
                                <div class="card-tools"><em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total active subscription" data-bs-original-title="Total active subscription"></em>
                                </div>
                            </div>
                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                <div class="nk-sale-data"><span class="amount">{{ $result->point }} คะแนน</span>
                                    <span class="sub-title">
                                        <!-- <span class="change down text-danger">
                                            <em class="icon ni ni-arrow-long-down"></em>1.93%
                                        </span>sincelast month -->
                                    </span>
                                </div>
                                <div class="nk-sales-ck"><canvas class="sales-bar-chart" id="activeSubscription" width="69" height="56" style="display: block; box-sizing: border-box; height: 56px; width: 69px;"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
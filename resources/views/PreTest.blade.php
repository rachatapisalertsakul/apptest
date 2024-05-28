@extends('layout')
@section('content')


<div class="row">
    <div class="d-flex  mb-3">
        <div class="p-2 ">
            <h4 class="nk-block-title">ขอสอบ Pre-test</h4>
        </div>
    </div>
</div>

<form action="{{ route('send_pretest') }}" method="post" enctype="multipart/form-data">
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title"></span>
                @csrf
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="firstname">ชื่อ <b class="text-danger">*</b></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ชื่อ" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="lastname">นามสกุล <b class="text-danger">*</b></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="nickname">ชื่อเล่น <b class="text-danger">*</b></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="ชื่อเล่น" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="stucode">รหัสนักศึกษา <b class="text-danger">*</b></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="stucode" name="stucode" placeholder="รหัสนักศึกษา" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="email">E-mail <b class="text-danger">*</b></label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($pretest as $key => $p)
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title"></span>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title text-primary" >ข้อ {{ $p->choice_no }}</h4>
                        <div class="nk-block-des">
                            <p style="font-size: 20px;">{{ $p->question }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-inner">
                    <div class="row gy-4">
                        <div class="col-md-3 col-sm-6">
                            <div class="preview-block"><span class="preview-title overline-title">ข้อ A</span>
                                <div class="custom-control custom-radio checked">
                                    <input type="radio" id="{{ $p->choice_no }}customRadio1" name="{{ $p->choice_no }}" value="a" class="custom-control-input">
                                    <label class="custom-control-label" for="{{ $p->choice_no }}customRadio1">{{ $p->choice_a }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="preview-block"><span class="preview-title overline-title">ข้อ B</span>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="{{ $p->choice_no }}customRadio2" name="{{ $p->choice_no }}" value="b" class="custom-control-input">
                                    <label class="custom-control-label" for="{{ $p->choice_no }}customRadio2">{{ $p->choice_b }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="preview-block"><span class="preview-title overline-title">ข้อ C</span>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="{{ $p->choice_no }}customRadio3" name="{{ $p->choice_no }}" value="c" class="custom-control-input">
                                    <label class="custom-control-label" for="{{ $p->choice_no }}customRadio3">{{ $p->choice_c }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="preview-block"><span class="preview-title overline-title">ข้อ D</span>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="{{ $p->choice_no }}customRadio4" name="{{ $p->choice_no }}" value="d" class="custom-control-input">
                                    <label class="custom-control-label" for="{{ $p->choice_no }}customRadio4">{{ $p->choice_d }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
<hr>
    <button type="submit" style="float: right;" class="btn btn-success float-right">ส่งคำตอบ</button>

</form>

@endsection
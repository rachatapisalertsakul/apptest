@extends('layout')
@section('content')


<div class="row">
    <div class="d-flex  mb-3">
        <div class="p-2 ">
            <h4 class="nk-block-title">ขอสอบ Quiz</h4>
        </div>
    </div>
</div>

<form action="{{ route('send_quiz') }}" method="post" enctype="multipart/form-data">
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

    @foreach($quiz as $key => $q)
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title"></span>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title text-primary">ข้อ {{ $q->quiz_no }}</h4>
                        <div class="nk-block-des">
                            <p style="font-size: 20px;">{{ $q->question }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-inner">
                    <input type="hidden" name="answer_no[]" value="{{ $q->quiz_no }}">
                    <textarea class="form-control no-resize" name="answer[]" id="default-textarea"></textarea>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <hr>
    <button type="submit" style="float: right;" class="btn btn-success float-right">ส่งคำตอบ</button>

</form>


@endsection
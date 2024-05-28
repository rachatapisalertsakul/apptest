@extends('layout')
@section('content')


<div class="row">
    <div class="d-flex  mb-3">
        <div class="p-2 ">
            <h4 class="nk-block-title">ผลคะแนน Pre-test และ Post-test</h4>
        </div>
    </div>
</div>


<div class="card card-bordered card-preview">
    <div class="card-inner">
        <table class="asset_list table" id="table">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>ชื่อ-กสุล</th>
                    <th>ชื่อเล่น</th>
                    <th>รหัสนักศึกษา</th>
                    <th>อีเมล</th>
                    <th>วันเวลาที่ทำการทดสอบ</th>
                    <th>คะแนน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pre_post_test as $key => $p)
                <tr class="text-center">
                    <td>{{ ++$key }}</td>
                    <td>{{ $p->firstname }}</td>
                    <td>{{ $p->nickname }}</td>
                    <td>{{ $p->stucode }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->date_test }}</td>
                    <td class="text-primary">{{ $p->point }} คะแนน</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="d-flex  mb-3">
        <div class="p-2 ">
            <h4 class="nk-block-title">คำตอบ Quiz</h4>
        </div>
    </div>
</div>

<div class="card card-bordered card-preview">
    <div class="card-inner">
        <table class="asset_list table" id="table">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>ชื่อ-กสุล</th>
                    <th>ชื่อเล่น</th>
                    <th>รหัสนักศึกษา</th>
                    <th>อีเมล</th>
                    <th>วันเวลาที่ทำการทดสอบ</th>
                    <th>คำตอบ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quiz as $key => $p)
                <tr class="text-center">
                    <td>{{ ++$key }}</td>
                    <td>{{ $p->firstname }}</td>
                    <td>{{ $p->nickname }}</td>
                    <td>{{ $p->stucode }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->date_test }}</td>
                    @php
                    $ans = explode("||",$p->answer);
                    @endphp
                    <td>
                        @foreach($ans as $a)
                        {{$a}}<br>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('js_script')
<script>
    $(document).ready(function() {
        var table = $('.asset_list').DataTable({
            "pageLength": 15,
            responsive: {
                details: !0
            },
            dom: "Pfrtip",
            searchPanes: {
                columns: [2, 3, 4],
                initCollapsed: false,
                cascadePanes: true,
                dtOpts: {
                    select: {
                        style: "multi",
                    },
                },
            },

            language: {
                search: "",
                searchPlaceholder: "ค้นหาด้วย Keyword ข้อมูล",
                lengthMenu: "<span class='d-none d-sm-inline-block'>Show</span><div class='form-control-select'> _MENU_ </div>",
                info: "_START_ -_END_ of _TOTAL_",
                infoEmpty: "",
                infoFiltered: "( Total _MAX_  )",
                paginate: {
                    first: "First",
                    last: "Last",
                    next: "Next",
                    previous: "Prev",
                },
            },
        });


    });
</script>

@endsection
@extends('layout')
@section('content')

<style>
    .card {
            /* width: 300px;
            height: 200px;
            background-color: #fff;
            border: 1px solid #ccc; */
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
    .card:hover {
        transform: scale(1.05);
        /* Enlarge the card on hover */
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        /* Add a shadow on hover */
    }
</style>

<div class="nk-block nk-block-lg">
    <div class="card-inner">
        <div class="row g-gs text-center ">
            @foreach($menu as $m)
            <div class="col-md-3 col-4 col-lg-4">
                <div class="card text-secondary bg-dark-dim">
                    <div class="card-header">
                        <h5>{{$m->name}}</h5>
                    </div>
                    <a href="{{ route($m->route)}}">
                        <div class="card-inner">
                            <img src="{{ asset('/images/svg/'.$m->svg.'.svg') }}" width="100" height="100" style="fill:#000;">
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




@endsection
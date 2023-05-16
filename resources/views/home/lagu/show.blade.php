@extends('home.layouts.app')

@section('main')
<div class="container">
    <div class="section-title">
        <h2>List Lagu</h2>
    </div>

    <div class="row content">
        <div class="card">
            <div class="card-body m-auto">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top w-100 h-100" src="{!! asset('storage/'.$lagu->cover) !!}" alt="{!! $lagu->album !!}">
                </div>
                <div class="card-body text-center">

                    <h5 class="h5 font-weight-bold">{!! $lagu->artis !!}</h5>
                    <p class="mb-0">{!! $lagu->title !!} | {!! $lagu->album !!}</p>
                    <audio id="music" src="{!! asset('storage/'.$lagu->audio) !!}" preload="true" controls>
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

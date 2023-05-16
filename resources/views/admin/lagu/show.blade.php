@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="h1 text-dark">Page Lagu</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Song of {!! $lagu->artis !!}</li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('main')
<section class="content">
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
</section>
@endsection

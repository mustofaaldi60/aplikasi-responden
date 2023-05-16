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
          <li class="breadcrumb-item active">Edit Lagu</li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('main')
<section class="content">
  <div class="card">
    <div class="card-body">
      <form method="post" action="/lagu/{{ $lagu->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="oldAudio" value="{{ $lagu->audio }}">
        <input type="hidden" name="oldImage" value="{{ $lagu->cover }}">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title')
              is-invalid
          @enderror" id="title" placeholder="Example: Renegades" required autofocus value="{{ old('title',$lagu->title) }}" name="title">
              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="artis">Artis</label>
              <input type="text" class="form-control @error('artis')
              is-invalid
          @enderror" id="artis" placeholder="Example: ONE OK ROCK" required autofocus value="{{ old('artis',$lagu->artis) }}" name="artis">
              @error('artis')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="genre">Genre</label>
              <input type="text" class="form-control @error('genre')
              is-invalid
          @enderror" id="genre" placeholder="Example: Post-hardcore" required autofocus value="{{ old('genre',$lagu->genre) }}" name="genre">
              @error('genre')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="album">Album</label>
              <input type="text" class="form-control @error('album')
              is-invalid
          @enderror" id="album" placeholder="Example: Luxury Disease" required autofocus value="{{ old('album',$lagu->album) }}" name="album">
              @error('album')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="audio" class="form-label">Audio</label>
            <input class="form-control form-control-file form-control-lg" type="file" id="audio" name="audio" value="{{ $lagu->audio }}">
            @error('audio')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="col-md-6">
            <div id="targetLayer"></div>
            <div class="icon-choose-image"></div>
            <label for="cover" class="form-label">Cover</label>
            <input class="form-control form-control-file form-control-lg" type="file" id="cover" name="cover" value="{{ $lagu->cover }}">
            @error('cover')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-sm btn-success mt-3">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

@extends('home.layouts.app')

@section('main')
<section>
    <div class="container">
        <div class="section-title">
            <h2>Request Lagu</h2>
        </div>

        <div class="row content">
            <form action="/g/request-lagu" method="POST">
                @csrf
                <div class="form-group">
                  <label for="guest_name">Name</label>
                  <input type="text" class="form-control @error('guest_name')
                    is-invalid
                @enderror" id="guest_name" placeholder="Example: Budi, Tono, Alex" required autofocus value="{{ old('guest_name') }}" name="guest_name">
                  @error('guest_name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control @error('title')
                            is-invalid
                        @enderror" id="title" placeholder="Example: Renegades, Wonder" required autofocus value="{{ old('title') }}" name="title">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="genre">Genre</label>
                      <input type="text" class="form-control @error('genre')
                            is-invalid
                        @enderror" id="genre" placeholder="Example: Pop, Rock, Post-hardcore" required value="{{ old('genre') }}" name="genre">
                      @error('genre')
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
                      <label for="artis">Singer / Band</label>
                      <input type="text" class="form-control @error('artis')
                            is-invalid
                        @enderror" id="artis" placeholder="Example: ONE OK ROCK, ST12, Kangen Band" required value="{{ old('artis') }}" name="artis">
                      @error('artis')
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
                        @enderror" id="album" placeholder="Example: 35xxxv, Ambitions, Eye of the Storm, Luxury Disease" required value="{{ old('album') }}" name="album">
                      @error('album')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
              </form>

        </div>
    </div>
</section>
@endsection


@extends('home.layouts.app')

@section('main')


@include('home.partials.navbar')
<section id="responden" class="mt-lg-5">
    <div class="container">
        <div class="section-title">
            <h2>Create Responden</h2>
        </div>

        <div class="row content">
            <form action="/g/responden" method="POST">
                @csrf
                <div class="row content">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pendengar">Pendengar</label>
                            <input type="text" class="form-control @error('pendengar')
                            is-invalid
                        @enderror" id="pendengar" placeholder="Example: Luna" required autofocus value="{{ old('pendengar') }}" name="pendengar">
                            @error('pendengar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="text" class="form-control @error('usia')
                            is-invalid
                        @enderror" id="usia" placeholder="Example: 23" required autofocus value="{{ old('usia') }}" name="usia">
                            @error('usia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
        </div>
        <div class="row content">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kelamin">Kelamin</label>
                    <input type="text" class="form-control @error('kelamin')
                            is-invalid
                        @enderror" id="kelamin" placeholder="Example: Laki-laki or Perempuan" required value="{{ old('kelamin') }}" name="kelamin">
                    @error('kelamin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telepon">No HP</label>
                    <input type="text" class="form-control @error('telepon')
                            is-invalid
                        @enderror" id="telepon" placeholder="Example: 08XXXXXXXXXX" required value="{{ old('telepon') }}" name="telepon">
                    @error('telepon')
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
                    <label for="jadwal">Jadwal</label>
                    <input type="date" name="jadwal" id="jadwal" value="{{ old('jadwal') }}" class="form-control @error('jadwal')
                          is-invalid
                      @enderror" required>
                    @error('jadwal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="acara_id">Acara</label>
                    <select name="acara_id" id="acara_id" class="form-select form-select-lg">
                        @foreach($acaras as $acara)
                        @if(old('acara_id') == $acara->id)
                        <option value="{{ $acara->id }}" selected>{{ $acara->nama }}</option>
                        @else
                        <option value="{{ $acara->id }}">{{ $acara->nama }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="respon_pendengar" class="input-group">Respon Pendengar</label>
                <textarea name="respon_pendengar" id="respon_pendengar" cols="125" rows="10" class="input-group-text form-control @error('respon_pendengar')
                is_invalid
            @enderror"></textarea>
                @error('respon_pendengar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <fieldset class="starability-growRotate">
                    <legend>Rating :</legend>
                    <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />
                    <input type="radio" id="rate1" name="rating" value="1" />
                    <label for="rate1" title="Terrible">1 star</label>
                    <input type="radio" id="rate2" name="rating" value="2" />
                    <label for="rate2" title="Not good">2 stars</label>
                    <input type="radio" id="rate3" name="rating" value="3" />
                    <label for="rate3" title="Average">3 stars</label>
                    <input type="radio" id="rate4" name="rating" value="4" />
                    <label for="rate4" title="Very good">4 stars</label>
                    <input type="radio" id="rate5" name="rating" value="5" />
                    <label for="rate5" title="Amazing">5 stars</label>
                </fieldset>
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

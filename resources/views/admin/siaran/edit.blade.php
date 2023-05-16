@extends('admin\layouts\app')

@section('breadcrumb')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="h1 text-dark">Siaran Page</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Edit Siaran</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection

@section('main')
<section class="content">
  <div class="card">
    <div class="card-body">
      <form action="/siaran/{{ $siarans->slug }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
          <div class="form-group col-md-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama')
                    is-invalid
                @enderror" id="nama" placeholder="Example: RRI Pro 1" required autofocus value="{{ old('nama',$siarans->nama) }}" name="nama">
            @error('nama')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="slug">Slug</label>
            <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" placeholder="Example: rri-pro-1" required readonly value="{{ old('slug',$siarans->slug) }}" name="slug">
            @error('slug')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="frekuensi">Frekuensi</label>
          <input type="text" class="form-control @error('frekuensi')
                is-invalid
            @enderror" id="frekuensi" placeholder="Example: 88.45 FM" required value="{{ old('frekuensi',$siarans->frekuensi) }}" name="frekuensi">
          @error('frekuensi')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

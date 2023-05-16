@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="h1 text-dark">Acara Page</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Edit Acara</li>
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
      <form action="/acara/{{ $acaras->slug }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('nama')
                    is-invalid
                @enderror" id="nama" placeholder="Example: Hitam Putih" required autofocus value="{{ old('nama',$acaras->nama) }}" name="nama">
              @error('nama')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" placeholder="Example: hitam-putih" required readonly value="{{ old('slug',$acaras->slug) }}" name="slug">
              @error('slug')
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
              <label for="jenis">Jenis</label>
              <input type="text" class="form-control @error('jenis')
                    is-invalid
                @enderror" id="jenis" placeholder="Example: Responden" required value="{{ old('jenis',$acaras->jenis) }}" name="jenis">
              @error('jenis')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="penyiar">Penyiar</label>
              <input type="text" class="form-control @error('penyiar')
                    is-invalid
                @enderror" id="penyiar" placeholder="Example: Putri" required value="{{ old('penyiar',$acaras->penyiar) }}" name="penyiar">
              @error('penyiar')
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
              <label for="hari">Hari</label>
              <input type="date" name="hari" id="hari" value="{{ old('hari') }}" class="form-control @error('hari',$acaras->hari)
                  is-invalid
              @enderror" required>
              @error('hari')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="jam">Jam</label>
              <input type="time" name="jam" id="jam" value="{{ old('jam') }}" class="form-control @error('jam',$acaras->jam)
                  is-invalid
              @enderror" required>
              @error('jam')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="siaran_id">Siaran</label>
            <select name="siaran_id" id="siaran_id" class="form-select form-select-lg">
              @foreach($siarans as $siaran)
              @if(old('siaran_id',$acaras->siaran_id) == $siaran->id)
              <option value="{{ $siaran->id }}" selected>{{ $siaran->nama }}</option>
              @else
              <option value="{{ $siaran->id }}">{{ $siaran->nama }}</option>
              @endif
              @endforeach
            </select>
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

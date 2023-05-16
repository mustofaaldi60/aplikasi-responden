@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="h1 text-dark">Chat Page</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Edit Chat</li>
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
      <form method="post" action="/chat/{{ $chat->id }}">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name')
                  is-invalid
              @enderror" id="name" placeholder="Example: Budi" required autofocus value="{{ old('name',$chat->name) }}" name="name">
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="no_hp">No HP</label>
              <input type="text" class="form-control @error('no_hp')
                  is-invalid
              @enderror" id="no_hp" placeholder="Example: 08xx-xxx-xxx" required autofocus value="{{ old('no_hp', $chat->no_hp) }}" name="no_hp">
              @error('no_hp')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="message">Message</label>
              <textarea type="text" class="form-control @error('message')
                  is-invalid
              @enderror" id="message" placeholder="Example: Hello, World!" required autofocus value="{{ old('message',$chat->message) }}" name="message"></textarea>
              @error('message')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
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

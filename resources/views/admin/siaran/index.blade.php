@extends('admin.layouts.app')

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
          <li class="breadcrumb-item active">Siaran List</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection

@section('main')
<section class="content">
  <div class="card">
    <div class="card-header">
      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <a href="/siaran/create" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Slug</th>
            <th scope="col">Frekuensi</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($siarans as $siaran)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $siaran->nama }}</td>
            <td>{{ $siaran->slug }}</td>
            <td>{{ $siaran->frekuensi }}</td>
            <td>
              <a href="{{ route('siaran.edit', $siaran->slug) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('siaran.destroy', $siaran->slug) }}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $siarans->links() }}
    </div>
  </div>
</section>
@endsection

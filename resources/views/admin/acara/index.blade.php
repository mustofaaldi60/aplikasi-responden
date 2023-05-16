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
          <li class="breadcrumb-item active">Daftar Acara</li>
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
      <a href="/acara/create" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Acara</th>
            <th scope="col">Slug</th>
            <th scope="col">Jenis Acara</th>
            <th scope="col">Penyiar</th>
            <th scope="col">Siaran</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($acaras as $acara)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{!! $acara->nama !!}</td>
            <td>{!! $acara->slug !!}</td>
            <td>{!! $acara->jenis !!}</td>
            <td>{!! $acara->penyiar !!}</td>
            <td>{!! $acara->siaran->nama !!}</td>
            <td>{!! \Carbon\Carbon::parse($acara->hari)->format('D') !!}</td>
            <td>{!! \Carbon\Carbon::parse($acara->jam)->format('H:i') !!}</td>
            <td>
              <a href="{{ route('acara.edit', $acara->slug) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('acara.destroy', $acara->slug) }}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $acaras->links() }}
    </div>
  </div>
</section>
@endsection

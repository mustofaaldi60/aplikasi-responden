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
                    <li class="breadcrumb-item active">List Lagu</li>
                </ol>
            </div>
        </div>
    </div>
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
            <a href="/lagu/create" class="btn btn-sm btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Artis</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Album</th>
                        <th scope="col">Audio</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($lagus as $lagu)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{!! $lagu->title !!}</td>
                        <td>{!! $lagu->artis !!}</td>
                        <td>{!! $lagu->genre !!}</td>
                        <td>{!! $lagu->album !!}</td>
                        <td>
                            @if ($lagu->audio)
                            <audio src="{{ asset('storage/'. $lagu->audio) }}" controls type="audio/*"></audio>
                            @else
                            <p class="text-danger h2 fs-2">Harap Masukan Lagu</p>
                            @endif
                        </td>
                        <td>
                            @if ($lagu->cover)
                            <img src="{{ asset('storage/'. $lagu->cover) }}" alt="{!! $lagu->album !!}" class="w-50 h-50">
                            @else
                            <p class="text-danger h2 fs-2">Harap Masukan Gambar</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('lagu.show', $lagu->id) }}" class="btn btn-sm btn-info">Show</a>
                            <a href="{{ route('lagu.edit', $lagu->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('lagu.destroy', $lagu->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $lagus->links() }}
        </div>
    </div>
</section>
@endsection

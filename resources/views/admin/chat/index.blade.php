@extends('admin.layouts.app')
@dd($chats)
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
                    <li class="breadcrumb-item active">Chat List</li>
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
                <a href="/chat/create" class="btn btn-sm btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($chats as $chat)
                    <tr>
                    <th scope="row">{!! $loop->iteration !!}</th>
                    <td>{!! $chat->name !!}</td>
                    <td>{!! $chat->no_hp !!}</td>
                    <td>{!! $chat->message !!}</td>
                    <td>
                        <a href="{{ route('chat.show', $chat->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ route('chat.edit', $chat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('chat.destroy', $chat->id) }}" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

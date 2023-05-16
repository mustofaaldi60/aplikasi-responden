@extends('admin.layouts.app')
{{-- @dd($chat) --}}
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
                    <li class="breadcrumb-item active">Chat</li>
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
            </div>
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">#</th>
                    <td>{!! $chat->name !!}</td>
                    <td>{!! $chat->no_hp !!}</td>
                    <td>{!! $chat->message !!}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

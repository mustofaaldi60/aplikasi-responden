@extends('home.layouts.app')

@section('main')
<section id="lagu">
    <div class="container">
        <div class="section-title">
            <h2>List Lagu</h2>
        </div>

        <div class="row content">
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
                            <audio src="{{ asset('storage/'. $lagu->audio) }}" controls></audio>
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
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $lagus->links() }}

        </div>
    </div>
</section>
@endsection


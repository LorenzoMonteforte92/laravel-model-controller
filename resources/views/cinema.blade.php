@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 d-flex flex-wrap gap-3">
                @foreach ($movies as $movie)
                    <div class="card" style="width: calc(100% / 5 - 1rem);">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{$movie->original_title}}</p>
                            <p class="card-text">{{ $movie->nationality}}</p>
                            <div class="d-flex justify-content-between" >
                                <small>{{$movie->date}}</small>
                                <small>{{$movie->vote}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
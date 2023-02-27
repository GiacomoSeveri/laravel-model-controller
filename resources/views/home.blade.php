@extends('layouts/app')

@section('title', 'movie')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-center flex-wrap">
        @foreach($movies as $movie)
            <div class="card m-3" style="width: 18rem;" type="button">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie['title'] }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $movie['original_title'] }}</h6>
                  <p class="card-text mb-1">{{ $movie['date'] }}</p>
                  <span>{{ $movie['nationality'] }}</span>
                    <span class="text-warning mx-5">{{ $movie['vote'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


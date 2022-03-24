<?php
    use App\Models\Movie;
    $count = Movie::all()->count();

    if      ($count <= 0)   {}
    else if ($count < 4)    {$collection = Movie::all()->random($count);}
    else                    {$collection = Movie::all()->random(4);}
?>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard-style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
    </style>
</head>
<x-app-layout>
    <x-slot name="header" class="display-none">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="container layout">
<div class="trailer">
    <div class="container main">
        @foreach($trailer as $trailer)
        <a href="movie/{{$trailer->id}}/detail">
            <div class="container">
                <img src="uploads/movies/{{ $trailer->image }}" class="trailer-img" alt="">
                <div class="content">
                    <p class="btn btn-success">Recommended 📌</p>
                    <br><br>
                    <h1>{{$trailer->movie_name}}</h1>
                    <br>
                    <p class="rating btn btn-warning">
                        ⭐ {{$trailer->rating}}/10
                    </p>
                    <p class="duration btn btn-dark">
                        ⌛{{$trailer->duration}}H
                    </p>
                    <p class="genre btn btn-info">
                        ℹ️  {{$trailer->genre}}
                    </p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
</div>

<div class="body">    
    <div class="top-picks">
        <h1 class="section-title">Top Picks For You ⭐</h1>
        <ul class="movie-list">
            @foreach($collection1 as $movie)
            <li class="movie card">
                <a href="movie/{{$movie->id}}/detail">
                    <img src="{{ asset("uploads/movies/$movie->image") }}"  alt="this.movie.name">
                    <p style="text-align: center;">{{$movie->movie_name}} <br> <span style="font-size: 10px; font-weight: lighter; color:red;">*click image for detail</span></p>
                    <br>
                    <div class="detail-movie">
                        <p class="rating-mov-list btn btn-warning">
                            ⭐ {{$movie->rating}}/10
                        </p>
                        <p class="duration-mov-list btn btn-dark">
                            ⌛{{$movie->duration}}H
                        </p>
                        <p class="genre-mov-list btn btn-info">
                            ℹ️  {{$movie->genre}}
                        </p>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="trending">
        <h1 class="section-title">Trending 🔥</h1>
        <ul class="movie-list">
            @foreach($collection2 as $movie)
            <li class="movie card">
                <a href="movie/{{$movie->id}}/detail">
                    <img src="{{ asset("uploads/movies/$movie->image") }}"  alt="this.movie.name">
                    <p style="text-align: center;">{{$movie->movie_name}} <br> <span style="font-size: 10px; font-weight: lighter; color:red;">*click image for detail</span></p>
                    <br>
                    <div class="detail-movie">
                        <p class="rating-mov-list btn btn-warning">
                            ⭐ {{$movie->rating}}/10
                        </p>
                        <p class="duration-mov-list btn btn-dark">
                            ⌛{{$movie->duration}}H
                        </p>
                        <p class="genre-mov-list btn btn-info">
                            ℹ️  {{$movie->genre}}
                        </p>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="new">
        <h1 class="section-title">New to this.app.name ✨</h1>
        <ul class="movie-list">
            @foreach($collection3 as $movie)
            <li class="movie card">
                <a href="movie/{{$movie->id}}/detail">
                    <img src="{{ asset("uploads/movies/$movie->image") }}"  alt="this.movie.name">
                    <p style="text-align: center;">{{$movie->movie_name}} <br> <span style="font-size: 10px; font-weight: lighter; color:red;">*click image for detail</span></p>
                    <br>
                    <div class="detail-movie">
                        <p class="rating-mov-list btn btn-warning">
                            ⭐ {{$movie->rating}}/10
                        </p>
                        <p class="duration-mov-list btn btn-dark">
                            ⌛{{$movie->duration}}H
                        </p>
                        <p class="genre-mov-list btn btn-info">
                            ℹ️  {{$movie->genre}}
                        </p>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<br><br><br>
</x-app-layout>

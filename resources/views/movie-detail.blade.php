<html>
<head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        * {
            font-family: Poppins;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .movie-img {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .movie-img img {
            transform: scale(0.7);
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
        }
        .section-title h1 {
            text-align: center;
            font-size: 30px;
        }
        .section-detail p {
            text-align: center;
        }
        .btn {
            margin: 10px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            transition: 0.3s;
        }
        .synopsis {
            width: 500px;
            margin-top: 30px;
        }

    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
@extends('layouts.navigation')
@section('container')
<div class="container">
<div class="content">
    <div class="section-title">
        <h1>{{$movie->movie_name}}</h1>
    </div>
    <div class="movie-img">
        <img src="{{ asset("uploads/movies/$movie->image") }}" alt="">
    </div>
    
    <div class="container">
    <div class="section-detail">
        <div class="container">
        <p class="rating btn btn-warning">
            ⭐ {{$movie->rating}}/10
        </p>
        <p class="duration btn btn-dark">
            ⌛{{$movie->duration}}H
        </p>
        <p class="genre btn btn-info">
            ℹ️  {{$movie->genre}}
        </p>
    </div>
        <p class="synopsis">
            {{$movie->synopsis}}
        </p>
    </div>
</div>
</div>
</div>
<div class="container">
    <div class="action">
        <a href="../{{$movie->id}}/edit" class="btn btn-success">✏️ Edit This Movie</a>
        <form action="{{ url("movie", $movie->id)}}" method="POST">
            @csrf
            @method("Delete")
            <button class="btn btn-danger">🗑️ Delete This Movie</button>
        </form>
    </div>
</div>
@endsection
</body>
</html>
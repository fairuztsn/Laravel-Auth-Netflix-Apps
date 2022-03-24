@extends('layouts.navigation')
@section('container')
<title>Movies</title>
<head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: black;
        }
        body {
            background-color: #F3F4F6;
        }
        .movie a img{
            height: 200px;
            width: 300px;
            background-color: whitesmoke;
            margin: 30px;
            transition: 0.2s;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
        }
        .movie-list {
            display: flex;
            flex-wrap: wrap;
        }
        .movie {
            list-style: none;
            flex: 0 0 25%; /* 100/7 = 14.28 */
        }
        .section-title {
            position: relative;
            left: 30px;
            font-weight: bolder;
            font-size: 30px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
        .movie a img:hover {
            transform: scale(0.98);
        }
        .movie a:active, .movie a img:active {
            transform: scale(0.9)
        }
        .movie-container {
            margin-top: 20px;
        }
        .add-movie {
            margin-top: 50px;
            margin-left: 60px;
        }
        .card {
            
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <a href="{{ url('add-movie') }}" class="add-movie btn btn-primary">Add Movie</a>
    </div>

    <div class="container movie-container">
        
        <ul class="movie-list">
            @foreach($movie_list as $movie)
            <li class="movie">
                {{-- {{ asset("uploads/movies/$movie->image") }} --}}
                {{-- <a href="movie/{{$movie->id}}/edit"> --}}
                <a href="movie/{{$movie->id}}/detail" class="card-dash">
                    <img src="{{ asset("uploads/movies/$movie->image") }}" alt="this.movie.name">
                    <div class="det">
                        <p style="
                        position: relative;
                        left: 30px;
                        text-align:center;
                        ">
                            <span class="btn btn-success">
                                🎫 {{$movie->movie_name}} |
                                ⏰ {{$movie->duration}}H
                            </span>
                            <br>
                            
                        </p>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</body>
@endsection
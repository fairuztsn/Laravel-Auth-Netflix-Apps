@extends('layouts.navigation')
@section('container')

@if (session('success'))
    <div class="alert-success">
        <p>{{ session('success') }}</p>
    </div>
@endif
@if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>${{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 30px;
        }
        .delete-btn {
            /* margin-left: 20px; */
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Movie</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('movie', $movie->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method("PUT")
                            <div class="form-group mb-3">
                                <label for="">Movie Name</label>
                                <input type="text" name="movie-name" id="" class="form-control"autocomplete="off" value="{{$movie->movie_name}}" placeholder="{{$movie->movie_name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Rating</label>
                                <input type="text" name="rating" id="" class="form-control" autocomplete="off" value="{{$movie->rating}}" placeholder="{{$movie->rating}}>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Duration</label>
                                <input type="text" name="duration" id="" class="form-control" autocomplete="off" value="{{$movie->duration}}" placeholder="{{$movie->duration}}>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Genre</label>
                                <input type="text" name="genre" id="" class="form-control" autocomplete="off" value="{{$movie->genre}}" placeholder="{{$movie->genre}}>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Synopsis</label>
                                <input type="text" name="synopsis" id="" class="form-control" autocomplete="off" value="{{$movie->synopsis}}" placeholder="{{$movie->synopsis}}>
                            </div>
                            <div class="form-group mb-3 d-flex">
                                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Save Movie Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
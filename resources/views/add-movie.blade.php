@extends('layouts.navigation')
@section('container')
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
                        <h4>Add Movie</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('add-movie') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="">Movie Name</label>
                                <input type="text" name="movie-name" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Rating</label>
                                <input type="text" name="rating" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Duration</label>
                                <input type="text" name="duration" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Genre</label>
                                <input type="text" name="genre" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Synopsis</label>
                                <input type="text" name="synopsis" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Movie</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
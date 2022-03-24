@extends('layouts.navigation')
@section('container')
<head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        *{text-align: center; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}
        body {background: #F3F4F6;}
        h1 {font-weight: bold}
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-img {
            margin-top: 100px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <img src="{{ asset("assets/default-profile-photo.jpg") }}" class="profile-img" alt="">
    </div>
    <h1>{{ Auth::user()->name }}</h1>
    <p>{{ Auth::user()->email }}</p>
</body>
@endsection
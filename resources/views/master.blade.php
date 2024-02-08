<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
</head>
<body>
{{--    <h1>This is heading</h1>--}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My Laravel</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog Category</a>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                    <li><a href="{{route('category',['id'=>$category['id']])}}" class="dropdown-item">{{$category['name']}}</a> </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        </ul>
    </div>

</nav>

@yield('body')


<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>


</body>
</html>

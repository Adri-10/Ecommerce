@extends('master')

@section('title')
    Home Page
@endsection

@section ('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 py-3">
                    <div class="card h-100">
                        <img src="{{asset('/')}}img/{{$blog['image']}}" alt="" class="card-img-top"/>
                        <div class="card-body">
{{--                            <h1>{{$name}}</h1>--}}
                            <h4>{{$blog['title']}}</h4>
                            <p>{{$blog['description']}}</p>
                            <a href="{{route('detail', ['id'=> $blog['id']])}}" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
{{--                    <h1 class="text-center">This is Home page!!</h1>--}}
                </div>
                @endforeach
            </div>
        </div>
@endsection

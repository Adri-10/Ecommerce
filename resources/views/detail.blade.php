@extends('master')

@section('title')
    Blog Detail Page
@endsection

@section ('body')
    <section class="py-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">{{$blog['title']}}</h1>
                    <img src="{{asset('/')}}img/{{$blog['image']}}" alt="" class=""/>
                </div>
            </div>
        </div>
@endsection



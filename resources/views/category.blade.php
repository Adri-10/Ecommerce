@extends('master')

@section('title')
    Category Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}img/{{$blog['image']}}" alt="" height="250" class="card-img-top"/>
                        <div class="card-body">
                            <h3>{{$blog['title']}}</h3>
                            <p>{{$blog['description']}}</p>
                            <hr/>
                            <a href="{{route('detail', ['id'=> $blog['id']])}}" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

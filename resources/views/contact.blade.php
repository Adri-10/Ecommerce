{{--<div>--}}
{{--    <a href="{{ route('home') }}"> Home Page </a> ||--}}
{{--    <a href="{{ route('about') }}"> About Page </a> ||--}}
{{--    <a href="{{ route('contact') }}"> Contact Page </a>--}}
{{--</div>--}}

{{--<h1>This is contact page!!</h1>--}}

@extends('master')

@section('title')
    Contact Page
@endsection

@section ('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-info-subtle shadow-lg">
                        <div class="card-header text-center bg-success">Series Program</div>
                        <div class="card-body">
                            <form action="{{route('make-series')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="starting_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="ending_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"> {{session('result')}}</textarea>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Make Result"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary shadow-lg">
                        <div class="card-header text-center bg-secondary">Even-Odd Series Program</div>
                        <div class="card-body">
                            <form action="{{route('even-odd')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="starting_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="ending_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Your Choice</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="my_choice" value="odd"/> Odd</label>
                                        <label><input type="radio" name="my_choice" value="even"/> Even</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"> {{session('EvenOddResult')}}</textarea>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Make Result"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-danger shadow-lg">
                        <div class="card-header text-center bg-info">Calculator Program</div>
                        <div class="card-body">
                            <form action="{{route('calculator')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="second_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Your Choice</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="choice" value="+"/> + </label>
                                        <label><input type="radio" name="choice" value="-"/> - </label>
                                        <label><input type="radio" name="choice" value="*"/> * </label>
                                        <label><input type="radio" name="choice" value="/"/> / </label>
                                        <label><input type="radio" name="choice" value="%"/> % </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"> {{session('calcResult')}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Make Result"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('welcome')

@section('header')
    <header class="container py-3">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
                <h1>{{$apiResponse->title}}</h1>
            </div>
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <img class="img-fluid rounded-5" src="{{$apiResponse->url}}" alt="{{$apiResponse->title}}">
            </div>
            <div class="com-12 col-md-10 col-lg-8 mx-auto mt-3">
                <p>{{$apiResponse->explanation}}</p>
            </div>
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <a href="{{url()->previous()}}" class="btn btn-dark">Go Back</a>
            </div>
        </div>
    </header>
@endsection
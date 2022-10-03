@extends('welcome')

@section('header')
    <header class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Choose one API and have fun!</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="container">
        <ul class="list-group">
            @foreach ($listings as $listing)
            <li class="list-group-item">
                <h5 class="fs-4">{{$listing->name}}</h5>
                <p>{{$listing->description}}</p>
                <a href="#" class="btn btn-sm btn-info">More</a>
            </li>
            @endforeach
        </ul>

    </main>
@endsection


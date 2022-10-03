@extends('welcome')

@section('header')
    <header class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nasa API</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, unde omnis molestias porro magni fugit neque accusamus quibusdam rerum accusantium distinctio ipsa sunt in inventore itaque et deleniti est quo.</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
<main class="container">
    <div class="row">
        @foreach ($apods as $apod)
        <div class="card col-12">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$apod->title}}</h5>
                <p class="card-text">{{$apod->description}}</p>
                <a href="{{route('apods.show', $apod->id)}}" class="btn btn-primary">Open</a>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection
@extends('layout.main')

@section('content')
<div class="container">

    <div class="card" style="width: 18rem;">
        <img src="{{$comic->cover}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->type}}</p>
            <a href="#" class="btn btn-primary">Read here</a>
        </div>
    </div>

</div>
@endsection
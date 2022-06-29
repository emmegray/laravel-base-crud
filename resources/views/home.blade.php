@extends('layout.main')

@section('content')
<div class="container">
    <ul class="list-group list-group-flush">
        @foreach ($comics as $comic)
        <li class="list-group-item"><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
</div>
@endsection
@extends('layout.main')

@section('content')

<h1>
    Hi!
</h1>

<ul>
    @foreach ($comics as $comic)
    <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
    @endforeach
</ul>

@endsection
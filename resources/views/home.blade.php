@extends('layout.main')

@section('content')
<div class="container">
    <ul class="list-group">
        @foreach ($comics as $comic)
        <li class="list-group-item"><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
</div>
@endsection
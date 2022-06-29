@extends('layout.main')

@section('content')

<a href="{{route('home')}}">Home</a>

<h1>{{ $comic->title }}</h1>

@endsection
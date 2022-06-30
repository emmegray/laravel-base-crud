@extends('layout.main')

@section('content')

<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type}}">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Comic cover</label>
            <input cover="text" class="form-control" name="cover" id="cover" value="{{ $comic->cover}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
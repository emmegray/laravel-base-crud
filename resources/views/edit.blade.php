@extends('layout.main')

@section('content')

<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title',$comic->title)}}">
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="type" id="type" value="{{ old('type',$comic->type)}}">
            @error('type')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Comic cover</label>
            <input cover="text" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover" value="{{ old('cover', $comic->cover)}}">
            @error('cover')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

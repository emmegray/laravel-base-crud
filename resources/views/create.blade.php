@extends('layout.main')

@section('content')

<div class="container">

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{old('type')}}">
            @error('type')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Comic cover</label>
            <input cover="text" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover" value="{{old('cover')}}">
            @error('cover')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

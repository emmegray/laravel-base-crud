@extends('layout.main')

@section('content')

<div class="container">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Comic cover</label>
            <input cover="text" class="form-control" name="cover" id="cover">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
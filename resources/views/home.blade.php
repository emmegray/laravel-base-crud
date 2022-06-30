@extends('layout.main')

@section('content')
<div class="container">
    <ul class="list-group list-group-flush">
        @foreach ($comics as $comic)
        <li class="list-group-item">
            <b>{{$comic->title}}</b>
            <div class="d-flex flex-row-reverse">

                <form action="{{ route('comics.delete', ['id' => $comic->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>

                <a class="btn btn-outline-secondary" href="{{route('comics.edit', $comic)}}">Edit</a>
                <a class="btn btn-outline-primary" href="{{route('comics.show', $comic->id)}}">Show</a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection
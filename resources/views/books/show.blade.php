@extends('layout.main')

@section('content')
  <div class="container">
    <h1>{{ $book->name }} <a class="btn btn-primary" href="{{ route('books.edit', $book) }}">Edit</a></h1>
    <div>Serie: {{ $book->series }}</div>
    <div>Data: {{ $book->date }}</div>
    <div>Tipo: {{ $book->type }}</div>
    
    <div class="row">
        <div class="col-4 offset-3">
            <img class="img-fluid" src="{{ $book->image }}" alt="">
        </div>
        <div class="col-5">
            <div>{!! $book->description !!}</div>
        </div>
    </div>

    <a href="{{ route('books.index') }}">Back</a>
  </div>
@endsection
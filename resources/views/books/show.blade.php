@extends('layout.main')

@section('content')

    <h1>{{ $book->name }}</h1>
    <a href="{{ route('books.index') }}">Back</a>
@endsection
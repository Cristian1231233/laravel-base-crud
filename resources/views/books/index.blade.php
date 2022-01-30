@extends('layout.main')

@section('content')

    <h1>Books</h1>

   <div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
            <th colspan="3" scope="col">action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $bookList as $book )
              <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->name}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->image}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->series}}</td>
                <td>{{$book->date}}</td>
                <td>{{$book->type}}</td>
                <td><a class="btn btn-success" href="{{ route('books.show', $book) }}">Show</a></td>
                <td><a class="btn btn-primary" href="{{ route('books.edit', $book) }}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{ route('books.show', $book) }}">Delete</a></td>
              </tr>

            @endforeach
          
        </tbody>
      </table>

        {{ $bookList->links() }}

   </div>
    
@endsection
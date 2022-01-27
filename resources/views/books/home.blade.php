@extends('layout.main')

@section('content')

    <h1>Books</h1>

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
          </tr>
        </thead>
        <tbody>

            @foreach ( $bookList as $book )
              <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->name}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->name}}</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
    
@endsection
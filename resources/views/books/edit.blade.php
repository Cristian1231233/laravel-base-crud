@extends('layout.main')

@section('content')

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-8 offset-2">
         <h1>Modifica di: {{ $book->name }}</h1>

         <form action="{{ route('books.store') }}" method="post">
        @csrf
            <div class="mb-3">
             <label for="name" class="form-label">Nome</label>
             <input type="text" value="{{ $book->name }}" class="form-control" name="name" id="name" placeholder="Nome libro">
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" value="{{ $book->series }}" class="form-control" name="series" id="series" placeholder="Serie">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" value="{{ $book->type }}" class="form-control" name="type" id="type" placeholder="Tipo">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" value="{{ $book->image }}" class="form-control" name="image" id="image" placeholder="Url immagine">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="text" value="{{ $book->date }}" class="form-control" name="date" id="date" placeholder="Data">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="number" value="{{ $book->description }}" class="form-control" name="description" id="description" placeholder="Descrizione"></textarea>
       
            <button class="btn btn-primary mt-3" type="submit">Invia</button>
            <button class="btn btn-secondary mt-3" type="reset">Reset</button>
        </form>
        </div>
        </div>
      </div>
    </div>
@endsection
@extends('layout.main')

@section('content')

    <div class="container mt-5 ">

        @if ($errors->any())
           <div class="alert alert-danger" role="alert">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
          </div>
        @endif

        <div class="row">
            <div class="col-8 offset-2">
         <h1>Nuovo libro</h1>

         <form action="{{ route('books.store') }}" method="post">
        @csrf
            <div class="mb-3">
             <label for="title" class="form-label">Nome</label>
             <input type="text" class="form-control" @error('title') is-invalid 
             @enderror name="title" id="title" placeholder="Nome libro">
           @error('name')
            <p class="form-errors">
               {{ $message }}
            </p>
           @enderror
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" @error('series') is-invalid 
            @enderror name="series" id="series" placeholder="Serie">
            @error('series')
            <p class="form-errors">
               {{ $message }}
            </p>
           @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" @error('type') is-invalid 
            @enderror name="type" id="type" placeholder="Tipo">
            @error('type')
            <p class="form-errors">
               {{ $message }}
            </p>
           @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" @error('image') is-invalid 
            @enderror name="image" id="image" placeholder="Url immagine">
            @error('image')
            <p class="form-errors">
               {{ $message }}
            </p>
           @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="text" class="form-control" @error('date') is-invalid 
            @enderror name="date" id="date" placeholder="Data">
            @error('date')
            <p class="form-errors">
               {{ $message }}
            </p>
           @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="number" class="form-control" @error('description') is-invalid 
            @enderror name="description" id="description" placeholder="Descrizione"></textarea>
            @error('description')
            <p class="form-errors">
               {{ $message }}
            </p>
           @enderror
            <button class="btn btn-primary mt-3" type="submit">Invia</button>
            <button class="btn btn-secondary mt-3" type="reset">Reset</button>
        </form>
        </div>
        </div>
      </div>
    </div>
@endsection
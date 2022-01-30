@extends('layout.main')

@section('content')

    <div class="container text-center mt-5">
        <h1>Errore</h1>
        <div>Pagina non trovata</div>
        <p>{{ $exception->getMessage() }}</p>
    </div>
    
@endsection
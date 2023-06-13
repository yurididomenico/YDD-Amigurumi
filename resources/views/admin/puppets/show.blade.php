@extends('layouts.app')
@section('content')
    <h1 class="mb-5">{{ $singolo_puppet->title }}</h1>
    <div class="p-show-card d-flex p-3">

        <div>
            <img class="img-fluid p-img-show me-5" src="{{ asset("storage/$singolo_puppet->cover") }}"
                alt="Immagine non trovata... :/">
        </div>

        <div>
            <h3>Descrizione:</h3>
            <p class="p-3">{{ $singolo_puppet->body }}</p>
        </div>
    </div>
@endsection

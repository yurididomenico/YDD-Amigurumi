@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Crea un Amigurumi</h1>
    </div>
    <form action="{{ route('admin.puppets.store') }}" method="POST" enctype="multipart/form-data" class="text-start py-4">
        @csrf
        <!-- Token -->
        <div class="my-4">
            <label class="form-label" for="">Titolo</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="my-4">
            <label class="form-label" for="">Descrizione</label>
            <textarea class="form-control" name="body"></textarea>
        </div>
        <div class="mb-4">
            <button class="bg-pink text-white p-2 px-3 rounded">Crea</button>
        </div>
    </form>
@endsection

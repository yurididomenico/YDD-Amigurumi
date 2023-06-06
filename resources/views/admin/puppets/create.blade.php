@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Crea un Amigurumi</h1>
    </div>
    <div class="creazioneAmigurumi d-flex justify-content-around align-items-center">
        <form action="{{ route('admin.puppets.store') }}" method="POST" enctype="multipart/form-data"
            class="text-start py-4 w-50">
            @csrf
            <!-- Token -->

            {{-- Titolo --}}
            <div class="my-4">
                <label class="form-label" for="">Titolo</label>
                <input class="form-control inputTitle" type="text" name="title" maxlength="30">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Descrizioone --}}
            <div class="my-4">
                <label class="form-label" for="">Descrizione</label>
                <textarea class="form-control inputBody" name="body"></textarea>
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Taglia --}}
            <div class="my-4">
                <label for="">Taglia</label>
                <select name="size_id" class="form-control">
                    <option value="">Seleziona la taglia</option>
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->size }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-4">
                <button class="bg-pink p-text-white p-2 px-3 rounded border-0 btnHover">Crea</button>
            </div>
        </form>
        <div class="anteprimaCarta w-25 d-flex flex-column align-items-center">
            <div class="titoloCarta p-3"></div>
            <div class="linea"></div>
            <div class="descrizioneCarta p-3"></div>
        </div>
    </div>

    <script>
        let titolo = document.querySelector(".inputTitle");
        let titoloCarta = document.querySelector(".titoloCarta");
        titoloCarta.innerHTML = "Titolo";

        let descrizione = document.querySelector(".inputBody");
        let descrizioneCarta = document.querySelector(".descrizioneCarta");
        descrizioneCarta.innerHTML = "Descrizione";


        titolo.addEventListener("keyup", function() {
            titoloCarta.innerHTML = titolo.value;
            if (titolo.value === "") titoloCarta.innerHTML = "Titolo";
        });
        descrizione.addEventListener("keyup", function() {
            descrizioneCarta.innerHTML = descrizione.value;
            if (descrizione.value === "") descrizioneCarta.innerHTML = "Descrizione";
        });
    </script>
@endsection

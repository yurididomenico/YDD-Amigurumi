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
            <div class="my-4">
                <label class="form-label" for="">Titolo</label>
                <input class="form-control inputTitle" type="text" name="title" maxlength="30">
            </div>
            <div class="my-4">
                <label class="form-label" for="">Descrizione</label>
                <textarea class="form-control inputBody" name="body"></textarea>
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

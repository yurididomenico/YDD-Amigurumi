@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Modifica Amigurumi: $puppet->title</h1>
    </div>
    <div class="creazioneAmigurumi d-flex justify-content-around align-items-center">
        <form action="{{ route('admin.puppets.update', $puppet->id) }}" method="POST" enctype="multipart/form-data"
            class="text-start py-4 w-50">
            @csrf
            <!-- Token -->
            @method('PUT')
            {{-- Titolo --}}
            <div class="my-4">
                <label class="form-label" for="">Titolo</label>
                <input value="{{ $puppet->title }}" class="form-control inputTitle" type="text" name="title"
                    maxlength="30">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Descrizione --}}
            <div class="my-4">
                <label class="form-label" for="">Descrizione</label>
                <textarea class="form-control inputBody" name="body">{{ $puppet->body }}</textarea>
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
                        <option value="{{ $size->id }}"
                            {{ $size->id == old('size_id', $puppet->size_id) ? 'selected' : '' }}>
                            {{ $size->size }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Filato --}}
            <div class="my-4">
                <label for="">Filato</label>
                <select name="type_id" class="form-control">
                    <option value="">Seleziona il filato</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}"
                            {{ $type->id == old('type_id', $puppet->type_id) ? 'selected' : '' }}>
                            {{ $type->type }}
                        </option>
                    @endforeach
                </select>
            </div>
            {{--
            <div class="my-4">
                <label for="">Tags:</label>
                @foreach ($tags as $tag)
                    <label for="">
                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            {{ $post->tags->contains($tag) ? 'checked' : '' }}>
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div> --}}

            <div class="mb-4">
                <button type="submit" class="bg-pink p-text-white p-2 px-3 rounded border-0 btnHover">Modifica</button>
            </div>
        </form>
    </div>
@endsection


{{-- @extends('layouts.app')
@section('content')
    <h1>Modifica Amigurumi: {{ $puppet->title }}</h1>
    <form action="{{ route('admin.puppets.update', $puppet->id) }}" method="POST" class="text-start py-4">
        @csrf
        @method('PUT')
        <div class="my-4">
            <label class="form-label" for="">Titolo</label>
            <input value="{{ $puppet->title }}" class="form-control" type="text" name="title">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="my-4">
            <label class="form-label" for="">Body</label>
            <textarea class="form-control" type="text" name="body">{{ $puppet->body }}</textarea>
            @error('body')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- <div class="my-4">
            <label for="">Categories</label>
            <select name="category_id" class="form-control">
                <option value="">Seleziona la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="my-4">
            <label for="">Tags:</label>
            @foreach ($tags as $tag)
                <label for="">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                        {{ $post->tags->contains($tag) ? 'checked' : '' }}>
                    {{ $tag->name }}
                </label>
            @endforeach
        </div> --}}
{{--
        <div class="mb-4">
            <button type="submit" class="btn btn-primary">Modifica</button>
        </div>
    </form>
@endsection
--}}

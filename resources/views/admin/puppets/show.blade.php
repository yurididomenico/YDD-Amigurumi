@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>{{ $singolo_puppet->title }}</h1>
        <p>{{ $singolo_puppet->body }}</p>
    </div>
@endsection

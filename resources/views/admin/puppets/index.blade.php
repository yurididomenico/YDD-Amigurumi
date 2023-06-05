@extends('layouts.app')
@section('content')
    <!-- Lista Posts -->
    <h1>Lista Amigurumi</h1>
    {{-- @foreach ($puppets as $puppet)
        {{ $puppet->title }}
    @endforeach --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">category_id</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($puppets as $puppet)
                <tr>
                    <td>{{ $puppet->id }}</td>
                    <td>{{ $puppet->title }}</td>
                    <td>{{ $puppet->body }}</td>
                    <td>Categoria</td>
                    <td>[][]</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $puppets->links() }}
    </div>
@endsection

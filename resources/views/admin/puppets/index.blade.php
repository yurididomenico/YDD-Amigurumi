@extends('layouts.app')
@section('content')
    <!-- Lista Posts -->
    <h1>Lista Amigurumi</h1>
    {{-- @foreach ($puppets as $puppet)
        {{ $puppet->title }}
    @endforeach --}}
    <a class="bg-pink p-text-white p-2 px-3 rounded btnHover" href="{{ route('admin.puppets.create') }}"><i
            class="fa-solid fa-plus"></i></a>

    <table class="table mt-3">
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
                    <td><a href="{{ route('admin.puppets.show', $puppet->id) }}">{{ $puppet->title }}</a></td>
                    <td>{{ $puppet->body }}</td>
                    <td>
                        @if ($puppet->category)
                            {{ $puppet->category['name'] }}
                        @endif
                    </td>
                    <td class="d-flex justify-content-start">
                        <a href="{{ route('admin.puppets.edit', $puppet->id) }}" class="me-3">
                            <i class="fa-solid fa-pen-to-square btnHover fs-40 text-secondary"></i>
                        </a>
                        <form method="POST" action="{{ route('admin.puppets.destroy', $puppet->id) }}">
                            @csrf
                            <!-- Token che rende univoco ogni click su submit -->
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash btnHover"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $puppets->links() }}
    </div>
@endsection

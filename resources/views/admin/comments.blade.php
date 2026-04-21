@extends('admin.layout')

@section('content')

<h1 class="text-2xl font-bold mb-4">Comentarios</h1>

<div class="bg-white shadow rounded p-4">

    @forelse($comments as $comment)
        <div class="border-b p-3 mb-2 bg-gray-50 rounded">

            <p class="text-gray-800">
                {{ $comment->contenido }}
            </p>

            <small class="text-gray-500">
                Imagen ID: {{ $comment->imagen }}
            </small>

        </div>
    @empty
        <p class="text-gray-500">No hay comentarios</p>
    @endforelse

</div>

@endsection
@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6 text-gray-800">
    Dashboard
</h1>

<div class="grid grid-cols-3 gap-6">

    <div class="bg-blue-500 text-white p-6 rounded-xl shadow">
        <h2 class="text-lg">Usuarios</h2>
        <p class="text-3xl font-bold">{{ $users }}</p>
    </div>

    <div class="bg-green-500 text-white p-6 rounded-xl shadow">
        <h2 class="text-lg">Comentarios</h2>
        <p class="text-3xl font-bold">{{ $comments }}</p>
    </div>

    <div class="bg-purple-500 text-white p-6 rounded-xl shadow">
        <h2 class="text-lg">Imágenes</h2>
        <p class="text-3xl font-bold">{{ $images }}</p>
    </div>

</div>

@endsection
@extends('admin.layout')

@section('content')

<h1 class="text-2xl font-bold mb-4">Imágenes</h1>

<div class="grid grid-cols-3 gap-4">
    @foreach($images as $img)
        <div class="bg-white p-3 shadow rounded">
            <img src="{{ asset('storage/'.$img->ruta) }}" class="w-full">
        </div>
    @endforeach
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-white shadow rounded p-4">

        <h1 class="text-2xl font-bold mb-4">
            Panel de Administrador
        </h1>

        <div class="mb-4">
            <p><strong>Usuario:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        </div>

        @auth
            @if(auth()->user()->is_admin)
                <div class="mb-4">
                    <a href="{{ route('user.create') }}" 
                       class="bg-blue-500 text-white px-4 py-2 rounded">
                       Crear nueva nota
                    </a>
                </div>
            @endif
        @endauth

        <div class="mt-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded">
                    Cerrar sesión
                </button>
            </form>
        </div>

    </div>
</div>
@endsection
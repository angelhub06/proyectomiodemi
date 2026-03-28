@extends('layout')

@section('content')

<!-- 🔥 BOTÓN SOLO ADMIN -->
@auth
    @if(auth()->user()->is_admin)
        <div style="margin-bottom:20px;">
            <a href="{{ route('user.create') }}" class="login-btn">
                Crear nueva nota
            </a>
        </div>
    @endif
@endauth

<div class="gallery">

    <a href="/detalle/ssj4_2.jpg" class="card">
        <img src="{{ asset('img/ssj4_2.jpg') }}">
    </a>

    <a href="/detalle/dbz.jpg" class="card">
        <img src="{{ asset('img/dbz.jpg') }}">
    </a>

    <a href="/detalle/dragon_ball_af.jpg" class="card">
        <img src="{{ asset('img/dragon_ball_af.jpg') }}">
    </a>

    <a href="/detalle/verde.jpg" class="card">
        <img src="{{ asset('img/verde.jpg') }}">
    </a>

    <a href="/detalle/super.jpg" class="card">
        <img src="{{ asset('img/super.jpg') }}">
    </a>

    <a href="/detalle/ssj4.jpg" class="card">
        <img src="{{ asset('img/ssj4.jpg') }}">
    </a>

    <a href="/detalle/dbs.jpg" class="card">
        <img src="{{ asset('img/dbs.jpg') }}">
    </a>

    <a href="/detalle/dbd.jpg" class="card">
        <img src="{{ asset('img/dbd.jpg') }}">
    </a>

    <a href="/detalle/dbs2.jpg" class="card">
        <img src="{{ asset('img/dbs2.jpg') }}">
    </a>

    <a href="/detalle/metal.jpg" class="card">
        <img src="{{ asset('img/metal.jpg') }}">
    </a>

</div>
@endsection
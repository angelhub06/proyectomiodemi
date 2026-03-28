@extends('layout')

@section('content')
<div class="detail-container">

    <div class="detail-card">
        <!-- IMAGEN PRINCIPAL -->
        <img src="{{ asset('img/'.$imagen) }}" class="detail-img">

        <div class="detail-info">
            <div class="detail-header">
                <span class="dots">•••</span>
            </div>

            <h3>Comentarios</h3>
            <p>mucho texto</p>
            <p>llegaron los zetas</p>
        </div>
    </div>

    <!-- GALERÍA LATERAL (también botones) -->
    <div class="side-gallery">

        <a href="/detalle/ssj4.jpg" class="side-card">
            <img src="{{ asset('img/ssj4.jpg') }}">
        </a>

        <a href="/detalle/dbz.jpg" class="side-card">
            <img src="{{ asset('img/dbz.jpg') }}">
        </a>

        <a href="/detalle/ssj4_2.jpg" class="side-card">
            <img src="{{ asset('img/ssj4_2.jpg') }}">
        </a>

        <a href="/detalle/dragon_ball_af.jpg" class="side-card">
            <img src="{{ asset('img/dragon_ball_af.jpg') }}">
        </a>

    </div>

</div>
@endsection
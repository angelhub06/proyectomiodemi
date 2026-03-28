<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Figma</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="top-bar" style="display:flex; align-items:center; gap:15px;">

    <!-- Inicio -->
    <a href="{{ url('/') }}" class="login-btn">Inicio</a>

    <div style="margin-left:auto; display:flex; align-items:center; gap:10px;">
        
        @guest
            <a href="{{ route('login') }}" class="login-btn">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="login-btn">Registrarse</a>
        @endguest

        @auth
            <!-- Nombre del usuario -->
            <span>{{ auth()->user()->name }}</span>

            <!-- Acceso admin -->
            @if(auth()->user()->is_admin)
                <a href="{{ route('admin.dashboard') }}" class="login-btn">
                    Panel Admin
                </a>
            @endif

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="login-btn">
                    Cerrar sesión
                </button>
            </form>
        @endauth

    </div>

</header>

<main style="padding:20px;">
    @yield('content')
</main>

<footer style="text-align:center; margin-top:20px;">
    © 2022–2025 Sistema Figma — Todos los derechos reservados.
</footer>

</body>
</html>
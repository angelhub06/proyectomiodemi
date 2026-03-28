<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Figma</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="top-bar">

    <a href="/" class="login-btn">Inicio</a>

    <div style="margin-left:auto; display:flex; gap:10px;">
        
        @guest
            <a href="{{ route('login') }}" class="login-btn">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="login-btn">Registrarse</a>
        @endguest

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="login-btn">Cerrar sesión</button>
            </form>
        @endauth

    </div>

</header>

<main>
    @yield('content')
</main>

<footer>
    © 2022–2025 Sistema Figma — Todos los derechos reservados.
</footer>

</body>
</html>
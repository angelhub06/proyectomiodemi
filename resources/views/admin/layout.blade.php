<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

<div class="flex h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-900 text-white flex flex-col p-5">

        <h1 class="text-2xl font-bold mb-8">Admin</h1>

        <nav class="space-y-2">

            <a href="{{ route('admin.dashboard') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700">
               Dashboard
            </a>

            <a href="{{ route('admin.users') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700">
               Usuarios
            </a>

            <a href="{{ route('admin.comments') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700">
               Comentarios
            </a>

            <a href="{{ route('admin.images') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700">
               Imágenes
            </a>

        </nav>

    </aside>

    <!-- CONTENIDO -->
    <main class="flex-1 p-8 overflow-y-auto">

        <div class="bg-white rounded-xl shadow p-6">
            @yield('content')
        </div>

    </main>

</div>

</body>
</html>
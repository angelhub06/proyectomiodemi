@extends('admin.layout')

@section('content')

<h1 class="text-2xl font-bold mb-4">Usuarios</h1>

<div class="bg-white shadow rounded p-4">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr class="border-b">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
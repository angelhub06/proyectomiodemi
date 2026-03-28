@extends('layouts.app')

@section('content')

<a href="{{ route('user.index') }}">back</a>

<form method="POST" action="{{ route('user.update', $user->id ) }}">
    @method('PUT')
    @csrf

    <label>Nombre</label>
    <input type="text" name="name" value="{{ $user->name }}"/>

    <label>Email</label>
    <input type="email" name="email" value="{{ $user->email }}"/>

    <label>Rol</label>
    <select name="role">
        <option value="usuario" {{ $user->role == 'usuario' ? 'selected' : '' }}>Usuario</option>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
    </select>

    <input type="submit" value="update">

</form>

@endsection
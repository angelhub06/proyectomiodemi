@extends('layouts.app')
@section('content')

<a href="{{ route('user.index') }}">back</a>

<form method="POST" action="{{ route('user.store') }}">
    @csrf

    <label>Nombre</label>
    <input type="text" name="name"/>

    <label>Email</label>
    <input type="email" name="email"/>

    <label>Password</label>
    <input type="password" name="password"/>

    <label>Rol</label>
    <select name="role">
        <option value="usuario">Usuario</option>
        <option value="admin">Admin</option>
    </select>

    <input type="submit" value="create">
</form>

@endsection
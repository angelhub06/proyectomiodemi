@extends('layout')

@section('content')

<h1>Lista de usuarios</h1>

@foreach($users as $user)
    <p>{{ $user->name }} - {{ $user->email }}</p>
@endforeach

@endsection
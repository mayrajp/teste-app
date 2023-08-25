@extends('layouts.app')

@section('title', 'Listagem de usuarios')

@section('content')
    <h1>Listagem de usuarios - <a href="{{route('users.create')}}"> Novo </a></h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} -
                {{ $user->surname }} -
                {{ $user->email }} -
                {{ $user->cellphone }} -
                <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
        @endforeach
    </ul>
@endsection

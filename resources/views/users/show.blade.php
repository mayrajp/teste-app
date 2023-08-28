@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')

    <h1>Dados do usuário {{ $user->name }}</h1>

    <ul
        class="w-100 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg whie:bg-gray-700 whie:border-gray-600 whie:text-white">
        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg whie:border-gray-600"> Nome : {{ $user->name }}
        </li>
        <li class="w-full px-4 py-2 border-b border-gray-200 whie:border-gray-600">Sobrenome : {{ $user->surname }}</li>
        <li class="w-full px-4 py-2 border-b border-gray-200 whie:border-gray-600">E-mail : {{ $user->email }}</li>
        <li class="w-full px-4 py-2 border-b border-gray-200 whie:border-gray-600">Celular : {{ $user->cellphone }}</li>

    </ul>

@endsection

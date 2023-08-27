@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')

    <h1>Editar usuario {{ $user->name }} </h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Nome</label>
            <input value="{{ $user->name }}" type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500"
                required value="{{ old('name') }}">
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 white:text-white">Sobrenome</label>
            <input value="{{ $user->surname }}" type="text" id="surname" name="surname"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500"
                required value="{{ old('surname') }}">
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 white:text-white">E-mail</label>
            <input value="{{ $user->email }}" type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500"
                required value="{{ old('email') }}">
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 white:text-white">Celular</label>
            <input value="{{ $user->cellphone }}" type="number" id="cellphone" name="cellphone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500"
                value="{{ old('cellphone') }}" required>
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 white:text-white">Senha</label>
            <input type="password" id="password" name="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500"
                required>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800">Salvar</button>
    </form>

@endsection

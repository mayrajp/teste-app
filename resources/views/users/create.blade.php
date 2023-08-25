@extends('layouts.app')

@section('title', 'Novo usuario')

@section('content')

<h1>Novo usuario</h1>

@if ($errors->any())
    <ul class="errors" >
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('users.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name')}}" >
    <input type="text" name="surname" placeholder="Sobrenome" value="{{ old('surname')}}" >
    <input type="text" name="cellphone" placeholder="Celular" value="{{ old('cellphone')}}" >
    <input type="email" name="email" placeholder="E-mail" value="{{ old('email')}}" >
    <input type="password" name="password" placeholder="Senha" value="{{ old('password')}}" >
    <button type="submit">Salvar</button>
</form>

@endsection
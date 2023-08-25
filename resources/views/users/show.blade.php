@extends('layouts.app')

@section('title', 'Detalhes do usuario')

@section('content')

<h1>Listagem do usuario {{$user->name}}</h1>

<ul>
    <li>{{$user->surname}}</li> 
    <li>{{$user->email}}</li> 
    <li>{{$user->cellphone}}</li> 
</ul>

@endsection
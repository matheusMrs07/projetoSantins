@extends('layouts.app')

@section('title', 'Lista usuário')
    


@section('content')

<h1>List User {{$user->name}}</h1>

<ul> 
    <li> {{$user->name}} </li>    
    <li> {{$user->email}} </li>

</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @csrf
    @method("DELETE")
    
    <button>Deletar</button>
</form>

@endsection
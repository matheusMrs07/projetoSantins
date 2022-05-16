@extends('layouts.app')

@section('header', 'Criar usuário')
    


@section('content')
<h1>
    New User
</h1>

@include('includes.validation_forms')

<form action="{{ route( 'users.store' ) }}" method="post">

    @include('users.partials.form')
</form>


@endsection
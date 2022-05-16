@extends('layouts.app')

@section('title', 'Edit usuário')
    


@section('content')
<h1>
    Edit User {{$user->name}}
</h1>

@include('includes.validation_forms')

<form action="{{ route( 'users.update', $user->id ) }}" method="post">
    @method('PUT')

    @include('users.partials.form')

</form>


@endsection
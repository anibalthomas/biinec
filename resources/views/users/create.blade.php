@extends('layouts.app')
@section('header')
  <h1>
    Registro de nuevo usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
    <li class="active">Tabla de Usuarios</li>
  </ol>
@endsection
@section('content')
  


    <form method="POST"
    action="{{ route('usuarios.store') }}"
    enctype="multipart/form-data"
     >

        @include('users.__form', ['user' => new App\User])
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>

  @include('partials.__messages')
@endsection

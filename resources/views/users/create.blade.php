@extends('layouts.app')
@section('header')
  <h1>
    Registro de nuevo usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
    <li class="active">Registro</li>
  </ol>
@endsection
@section('content')

<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-body">

        <form method="POST"
        action="{{ route('usuarios.store') }}"
        enctype="multipart/form-data"
        >

        @include('users.__form', ['user' => new App\User])
        <input class="btn btn-primary" type="submit" value="Guardar">
      </form>

      </div>
    </div>
  </div>
</div>



  @include('partials.__messages')
@endsection

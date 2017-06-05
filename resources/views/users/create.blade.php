@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Registro de nuevo usuario
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
      <li class="active">Tabla de Usuarios</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <form method="POST"
    action="{{ route('usuarios.store') }}"
    enctype="multipart/form-data"
     >

        @include('users.__form', ['user' => new App\User])
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>

  </section>
  <!-- /.content -->
</div>
  @include('partials.__messages')
@endsection

@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Mensaje

      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
      <li class="active">Tabla de Usuarios</li>
    </ol>
  </section>
  <!-- Main content -->
  <div class="content">
    <p>{{ $message->body }}</p>
    <small>Enviado por {{ $message->sender->name}}</small>

  </div>


  </section>
  <!-- /.content -->
</div>
  {{-- @include('partials.__messages') --}}
@endsection

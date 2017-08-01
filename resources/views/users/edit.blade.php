@extends('layouts.app')
@section('header')
  <h1>
    Editar Usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-users"></i>Usuarios</a></li>
    <li class="active">Tabla de Usuarios</li>
  </ol>
@endsection
@section('content')



        <form method="POST"
        action="{{ route('usuarios.update', $user->id) }}"
        enctype="multipart/form-data"
          >
          {!! method_field('PUT')!!}
          <img width="100px" src="{{ Storage::url($user->avatar)}}">
          @include('users.__form')
            <input class="btn btn-primary" type="submit" value="Editar">
        </form>
        <a href="{{ route('password')}}">Cambiar mi password</a>



  {{-- <script src="/js/app.js"></script> --}}
  @include('partials.__messages')

    @endsection

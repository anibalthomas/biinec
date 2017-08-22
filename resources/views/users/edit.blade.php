@extends('layouts.app')
@section('header')
  <h1>
    Editar Usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-home glyphicon glyphicon-edit"></i> Edición</a></li>
  </ol>
@endsection
@section('content')


  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">

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


        </div>
      </div>
    </div>
  </div>





  {{-- <script src="/js/app.js"></script> --}}
  @include('partials.__messages')

    @endsection

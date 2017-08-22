@extends('layouts.app')
@section('header')
  <h1>
    Editar Contraseña
    <small></small>
  </h1>



  <ol class="breadcrumb">
    <li><a href="/usuarios/{{ auth()->id()}}/edit"><i class="glyphicon glyphicon-edit"></i>Editar</a></li>
    <li class="active"><a href="#"><i class="fa fa-key"></i>Cambio de contraseña</a></li>
  </ol>
@endsection
@section('content')


  <div class="row">
    <div class="col-md-5">
      <div class="box box-primary">
        <div class="box-body">



          @if (Session::has('message'))
            <div class="text-danger">
              {{Session::get('message')}}
            </div>
          @endif

          <form method="post" action="{{ route('updatepassword') }}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="mypassword">Introduce tu actual password:</label>
              <input type="password" name="mypassword" class="form-control">
              <div class="text-danger">{{$errors->first('mypassword')}}</div>
            </div>
            <div class="form-group">
              <label for="password">Introduce tu nuevo password:</label>
              <input type="password" name="password" class="form-control">
              <div class="text-danger">{{$errors->first('password')}}</div>
            </div>
            <div class="form-group">
              <label for="mypassword">Confirma tu nuevo password:</label>
              <input type="password" name="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cambiar mi password</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  {{-- <script src="/js/app.js"></script> --}}
  @include('partials.__messages')

    @endsection

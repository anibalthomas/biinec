@extends('layouts.app')
@section('header')
  <h1>
    Perfil de Usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> home</a></li>

  </ol>
@endsection
@section('content')

    <div class="container">
          <div class="row">

            <div class="col-md-6 col-md-offset-2">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-green">
                  <div class="widget-user-image">
                    <img class="img-circle" src="{{ Storage::url(Auth::user()->avatar)}}" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">{{ Auth::user()->name }} Sánchez Mújica</h3>
                  <h5 class="widget-user-desc">Desarrollador</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Área o red de Adscripción <span class="pull-right">Enlance con la Sociedad</span></a></li>
                    <li><a href="#">Fecha de Nacimiento <span class="pull-right">13/03/1988</span></a></li>
                    <li><a href="#">Género<span class="pull-right">Masculino</span></a></li>
                    <li><a href="#">Ciudad <span class="pull-right">Xalapa, Ver.</span></a></li>
                    <li><a href="#">Correo <span class="pull-right">{{ Auth::user()->email }}</span></a></li>
                    <li><a href="#">url <span class="pull-right">www.paginaejemplo.com</span></a></li>
                    <div class="panel-footer">
                        <a href="/usuarios/{{ auth()->id()}}/edit" data-original-title="Editar" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                    </div>

                  </ul>
                </div>
              </div>
              <!-- /.widget-user -->
            </div>
            <!-- /.col -->

          </div>
        </div>
        @include('partials.__messages')
@endsection

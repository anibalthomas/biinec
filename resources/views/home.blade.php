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

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>{{$npostsu}}</h3>

              <p>Publicaciones</p>
            </div>
            <div class="icon">
              <i class="ion ion-compose"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
              @if (auth()->user()->hasRoles(['admin']) )
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>{{$nposts}}</h3>

                      <p>Publicaciones Totales</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-android-create"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                  </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>{{$nusers}}</h3>

                      <p>Usuarios Registrados</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                  </div>
                </div>


              </div>
         <div class="row">
           <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-purple">
               <div class="inner">


                 <h3>{{$online}}</h3>

                 <p>Usuarios en linea</p>
               </div>
               <div class="icon">
                 <i class="ion ion-ios-people"></i>
               </div>
               {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
             </div>
           </div>

           <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-green">
               <div class="inner">
                 <h3>0</h3>

                 <p>Visitantes</p>
               </div>
               <div class="icon">
                 <i class="ion ion-android-globe"></i>
               </div>
               {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
             </div>
           </div>


           <div class="col-lg-3 col-xs-6">

             <div class="small-box bg-red">
               <div class="inner">
                 <h3>0</h3>

                 <p>Imagenes descargadas</p>
               </div>
               <div class="icon">
                 <i class="ion ion-ios-cloud-download"></i>
               </div>

             </div>
           </div>
              @endif
            </div>





          <div class="row">

            <div class="col-lg-6 col-xs-6">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-green" style="padding-bottom: 44px;">
                  <div class="widget-user-image">
                    <img class="img-circle" src="{{ Storage::url(Auth::user()->avatar)}}" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">{{ Auth::user()->name }} {{ Auth::user()->apellidop }} {{ Auth::user()->apellidom }}</h3>
                  {{-- <h5 class="widget-user-desc">Desarrollador</h5> --}}
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Área o red de Adscripción <span class="pull-right">{{ Auth::user()->area->name }}</span></a></li>

                    <li><a href="#">Fecha de Nacimiento <span class="pull-right">{{ Carbon\Carbon::parse(Auth::user()->fechan)->toDateString()}}</span></a></li>
                    <li><a href="#">Género<span class="pull-right">
                      @if (Auth::user()->genero == 1 )
                        Masculino
                      @elseif (Auth::user()->genero == 2 )
                        Femenino
                      @endif

                    </span></a></li>
                    <li><a href="#">Ciudad <span class="pull-right">{{ Auth::user()->ciudad->name }}, {{ Auth::user()->estado->name }}</span></a></li>
                    <li><a href="#">Correo <span class="pull-right">{{ Auth::user()->email }}</span></a></li>
                    @if (Auth::user()->url == null)
                    @else
                       <li><a href="#">url <span class="pull-right">{{ Auth::user()->url }}</span></a></li>
                    @endif

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

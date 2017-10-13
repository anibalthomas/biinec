@extends('layouts.applr')

@section('content')




        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Registro</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Nombre</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus required>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('apellidop') ? ' has-error' : '' }}">
                                    <label for="apellidop" class="col-md-4 control-label">Primer Apellido</label>

                                    <div class="col-md-6">
                                        <input id="apellidop" type="text" class="form-control" name="apellidop" value="{{ old('apellidop') }}"  autofocus required>

                                        @if ($errors->has('apellidop'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('apellidop') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('apellidom') ? ' has-error' : '' }}">
                                    <label for="apellidom" class="col-md-4 control-label">Segundo Apellido</label>
                                    <div class="col-md-6">
                                        <input id="apellidom" type="text" class="form-control" name="apellidom" value="{{ old('apellidom') }}"  autofocus required>

                                        @if ($errors->has('apellidom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('apellidom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('area_id') ? 'has-error': ''}}">
                                    <label class="col-md-4 control-label"> Área de Adscripción</label>
                                      <div class="col-md-6">
                                          <select  name="area_id" class="form-control" name="" type="selected" required>
                                              <option value="">Selecciona una área</option>
                                              @foreach ($areas as $area)
                                                    <option value="{{ $area->id }}"
                                                        {{ old('area_id') == $area->id ? 'selected' : ''}}
                                                      >{{ $area->name }}</option>
                                              @endforeach
                                          </select>
                                          <strong> {!! $errors->first('area_id', '<span class="help-block">:message</span>')!!}  </strong>
                                      </div>
                                </div>

                                <div class="form-group {{ $errors->has('genero') ? 'has-error': ''}}">
                                    <label class="col-md-4 control-label"> Género</label>
                                      <div class="col-md-6">
                                          <select  name="genero" class="form-control" name="" type="selected" required>
                                              <option value="{{ old('genero') }}">Selecciona un género</option>
                                              <option value="1">Masculino</option>
                                              <option value="2">Femenino</option>
                                          </select>
                                          <strong> {!! $errors->first('genero', '<span class="help-block">:message</span>')!!}  </strong>
                                      </div>
                                </div>


                                <div class="form-group{{ $errors->has('fechan') ? ' has-error' : '' }}">
                                    <label for="fechan" class="col-md-4 control-label">Fecha de Nacimiento</label>
                                    <div>
                                        <div class="col-md-6 input-group date" style="padding-left: 15px;padding-right: 15px;">
                                          <div class="input-group-addon" style="background-color: white;">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input id="datepicker" type="text" placeholder="mm/dd/aaaa"
                                          class="form-control" name="fechan" value="{{ old('fechan') }}"  required autofocus>
                                        </div>
                                          @if ($errors->has('fechan'))
                                              <span class="help-block calendarmod" style="padding-left: 265px;">
                                                  <strong>{{ $errors->first('fechan') }}</strong>
                                              </span>
                                          @endif
                                    </div>
                                </div>
{{-- Estados --}}
                                <div class="form-group {{ $errors->has('estado_id') ? 'has-error': ''}}">
                                    <label class="col-md-4 control-label"> Estado</label>
                                      <div class="col-md-6">
                                          <select  name="estado_id" id="state" class="form-control" name="" type="selected" required>
                                              <option value="">Selecciona un Estado</option>
                                              @foreach ($states as $state)
                                                    <option value="{{ $state->id }}"
                                                        {{-- {{ old('estado_id') == $state->id ? 'selected' : ''}} --}}
                                                      >{{ $state->name }}</option>
                                              @endforeach
                                          </select>
                                          <strong> {!! $errors->first('estado_id', '<span class="help-block">:message</span>')!!}  </strong>
                                      </div>
                                </div>
{{-- Ciudades --}}
                                <div class="form-group {{ $errors->has('ciudad_id') ? 'has-error': ''}}">
                                    <label class="col-md-4 control-label"> Ciudad</label>
                                      <div class="col-md-6">
                                          <select  name="ciudad_id" class="form-control" id="town" type="selected" required>
                                          </select>
                                          <strong> {!! $errors->first('ciudad_id', '<span class="help-block">:message</span>')!!}  </strong>
                                      </div>
                                </div>


                                <div class="form-group
                                {{ $errors->has('url') ? ' has-error' : '' }}
                                ">
                                    <label for="url" class="col-md-4 control-label">URL</label>
                                    <div>
                                        <div class="col-md-6 input-group" style="padding-left: 15px;padding-right: 15px;">
                                          <div class="input-group-addon" style="background-color: white;">
                                            <h5 style="margin: 1px;">http://</h5>
                                          </div>
                                          <input id="datepicker" type="text"
                                          class="form-control" name="url" value="{{ old('url') }}" >
                                        </div>
                                          @if ($errors->has('url'))
                                              <span class="help-block" style="padding-left: 265px;">
                                                  <strong>{{ $errors->first('url') }}</strong>
                                              </span>
                                          @endif
                                          <div style="text-align:center;">
                                            *Este campo no es obligatorio
                                          </div>
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Dirección de correo electrónico</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" selected >

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" selected>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
@push('styles')





  {{-- ESTILO PARA CALENDARIO --}}
<style type="text/css">
@media screen and (max-width: 991px) {
  .calendarmod{
    display: -moz-groupbox;
    margin-left: 14px;
  }}
</style>
  <link rel="stylesheet" href="/adminlte/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">

@endpush
@push('scripts')
{{-- ESTADOS --}}
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>

  $('#state').on('change',function(e){
    console.log(e);
    var sta_id = e.target.value;
    //ajax
    $.get('/ajax-town?sta_id=' + sta_id, function(data){
        //success data
        $('#town').empty();
        $('#town').append('<option value="">Selecciona una Ciudad</option>');
        $.each(data, function(index, townObj){

            $('#town').append('<option value='+townObj.id + '>' + townObj.name+'</option>');
        });
    });
  });
</script>


  {{-- <!-- bootstrap datepicker --> --}}
  <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
  {{-- <script src="customjs/dropdown.js"></script> --}}
  <script src="customjs/jquery-2.1.0.min.js"></script>
  {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script> --}}
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
      <script>
            $('#datepicker').datepicker({
              //  format: 'dd/mm/yyyy',
              autoclose: true
            })

      </script>

@endpush

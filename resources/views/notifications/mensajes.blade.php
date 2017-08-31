@extends('layouts.app')
@section('header')
  <h1>
    Envio de Mensajes
    {{-- <small>Optional description</small> --}}
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Envío de mensajes</a></li>

  </ol>

@endsection
@section('content')




        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                    <div class="panel panel-default">
                        <div class="panel-heading">Enviar mensaje</div>
                        <form action="{{ route('messages.store') }}" method="post">
                            {{ csrf_field() }}
                                <div class="panel-body">

                                  <div class="form-group {{ $errors->has('recipient_id') ? 'has-error' : ''}}">
                                    <select name="recipient_id" class="form-control">
                                      <option value="">Seleciona Usuario</option>
                                      @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                      @endforeach
                                    </select>
                                    {!! $errors->first('recipient_id',"<span class=help-block>:message</span>")!!}
                                  </div>
                                  <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                                    <textarea name="body" class="form-control" placeholder="Escribe tu mensaje aquí"></textarea>
                                    {!! $errors->first('body',"<span class=help-block>:message</span>")!!}
                                  </div>
                                  <div class="form-group">
                                    <button class="btn btn-primary btn-block">Enviar</button>
                                  </div>
                                </div>
                        </form>
              </div>


            </div>
        </div>


  @include('partials.__messages')
@endsection

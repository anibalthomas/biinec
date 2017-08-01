@extends('layouts.app')
@section('header')
  <h1>Notificaciones

    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
    <li class="active">Tabla de Usuarios</li>
  </ol>

@endsection
@section('content')



          <div class="row">
              <div class="col-sm-6">
                  <h2>No leídas</h2>
                  <ul class="list-group">

                    @foreach ($unreadNotifications as $unreadNotification)
                          <li class="list-group-item">
                                <a href="{{ ($unreadNotification->data['link']) }}">
                                    {{ ($unreadNotification->data['text']) }}
                                </a>

                                <form method="POST" action="{{ route('notifications.read', $unreadNotification->id) }}"
                                class="pull-right">
                                      {{ method_field('PATCH') }}
                                      {{ csrf_field() }}
                                    <button class="btn btn-danger btn-xs">X</button>
                                </form>
                          </li>
                    @endforeach
                  </ul>
              </div>
              <div class="col-sm-6">
                  <h2>Leídas</h2>
                  <ul class="list-group">

                    @foreach ($readNotifications as $readNotification)
                      <li class="list-group-item">
                            <a href="{{ ($readNotification->data['link']) }}">
                                {{ ($readNotification->data['text']) }}
                            </a>
                            <form method="POST"
                                  action="{{ route('notifications.destroy', $readNotification->id) }}"
                                  class="pull-right">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                <button class="btn btn-danger btn-xs">X</button>
                            </form>
                      </li>
                    @endforeach
                  </ul>
              </div>

</div>
  @include('partials.__messages')
@endsection

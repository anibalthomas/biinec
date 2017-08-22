@extends('layouts.app')
@section('header')
  <h1>Mensaje
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('notifications.index')}}"><i class="fa fa-bell-o"></i>Notificaciones</a></li>
    <li class="active">Mensaje</li>
  </ol>
@endsection
@section('content')

    <p>{{ $message->body }}</p>
    <small>Enviado por {{ $message->sender->name}}</small>

  {{-- @include('partials.__messages') --}}
@endsection

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



    <div class="row">

      <div class="col-md-7">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Leer Mensaje</h3>

            <div class="box-tools pull-right">

            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-read-info">
              {{-- <h3>Message Subject Is Placed Here</h3> --}}
              <h5>De:{{ $message->sender->name}}
                {{-- <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5> --}}
              </div>
              <!-- /.mailbox-read-info -->

                      <div class="mailbox-read-message">
                                    <p>{{ $message->body }}</p>
                      </div>
                              <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.box-body -->


                          </div>
                          <!-- /. box -->
                        </div>
                        <!-- /.col -->
    </div>

@endsection

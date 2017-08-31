@extends('layouts.app')
@section('header')
  <h1>Notificaciones

    <small></small>
  </h1>
  <ol class="breadcrumb">
    {{-- <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li> --}}
    <li class="active">Notificaciones</li>
  </ol>

@endsection
@section('content')



          <div class="row">
              {{-- <div class="col-sm-6">
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
              </div> --}}


<div class="col-md-6">
  <div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">No leídas</h3>

  <div class="box-tools pull-right">

  </div>
  <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
    <div class="box-body no-padding">

      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>


            @foreach ($unreadNotifications as $unreadNotification)
              <tr>
              <td class="mailbox-name">De: {{ ($unreadNotification->data['name']) }}</td>
                <td class="mailbox-subject">
                  <a href="{{ ($unreadNotification->data['link']) }}">
                            {{ ($unreadNotification->data['text']) }}
                  </a>
                  <form method="POST" action="{{ route('notifications.read', $unreadNotification->id) }}"
                  class="pull-right">
                  {{ method_field('PATCH') }}
                  {{ csrf_field() }}
                  <button class="btn btn-danger btn-xs">X</button>
                  </form>
                </td>
                {{-- <td class="mailbox-attachment"></td> --}}
                {{-- <td class="mailbox-date">5 mins ago</td> --}}
              </tr>
            @endforeach

          </tbody>
        </table>
        <!-- /.table -->
      </div>
      <!-- /.mail-box-messages -->
    </div>
    <!-- /.box-body -->

  </div>
  <!-- /. box -->
</div>
<!-- /.col -->

{{--
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
              </div> --}}

<div class="col-md-6">
  <div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">leídas</h3>
  <div class="box-tools pull-right">
  </div>
  </div>
    <div class="box-body no-padding">
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            @foreach ($readNotifications as $readNotification)
              <tr>
              {{-- <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td> --}}
                <td class="mailbox-subject">
                  <a href="{{ ($readNotification->data['link']) }}">
                    {{ ($readNotification->data['text']) }}
                  </a>
                    <form method="POST" action="{{ route('notifications.destroy', $readNotification->id) }}"class="pull-right">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button class="btn btn-danger btn-xs">X</button>
                    </form>
                </td>
                {{-- <td class="mailbox-attachment"></td> --}}
                {{-- <td class="mailbox-date">5 mins ago</td> --}}
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>
  @include('partials.__messages')
@endsection

@extends('layouts.app')
@section('header')
  <h1>
    Usuarios
    {{-- <small>ddd</small> --}}
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
    <li class="active">Tabla de Usuarios</li>
  </ol>
@endsection
@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Listado de Usuarios</h3>
      {{-- <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  Crear publicaciones</button> --}}
    </div>
<div class="box-body">
    <table id="users-table"  class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                   @foreach ($users as $user)
                     <tr>
                       <td>{{ $user->id}}</td>
                       <td>{{ $user->name}}</td>
                       <td>{{ $user->email}}</td>
                       <td>
                         {{ $user->roles->pluck('display_name')->implode(' - ') }}
                        </td>
                        <td>
              						<a class="btn btn-info btn-xs"
              							href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
              						<form style="display:inline"
              								method="POST"
              								action="{{ route('usuarios.destroy', $user->id) }}">
              							{!! csrf_field() !!}
              							{!! method_field('DELETE') !!}

              							<button class="btn btn-danger btn-xs" type="submit"
                             onclick="return confirm('¿Estás seguro de querer eliminar este usuario?')"
                            {{-- onclick="return confirm('¿Estás seguro de querer eliminar este usuario?')" --}}
                            >Eliminar</button>
              						</form>
              					</td>

                    </tr>
                   @endforeach
            </tbody>
        </table>
</div>
</div>
  @include('partials.__messages')
@endsection
@push('styles')
  <link rel="stylesheet" href="/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css">

  {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"> --}}
@endpush
@push('scripts')
  <script src="/adminlte/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
      $('#users-table').DataTable();

    });
  </script>
  {{--
  <script src="/bootstrap/js/datatables.js"></script>
  <script>
  $(document).ready(function() {

      $('#users').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax": "api/users",
          "columns":[
              {data: 'id'},
              {data: 'name'},
              {data: 'email'},
              // {data: 'roles'},
              // {data: 'email'},

          ]
      });
  });
  </script> --}}
@endpush

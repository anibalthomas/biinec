@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tabla de Usuarios
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
      <li class="active">Tabla de Usuarios</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <table id="users" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    {{-- <th>Rol</th>
                    <th>Acciones</th> --}}
                </tr>
            </thead>
            <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  {{-- <th>Rol</th>
                  <th>Acciones</th> --}}
                </tr>
            </tfoot>
            <tbody>
                   @foreach ($users as $user)
                     <tr>
                       <td>{{ $user->id}}</td>
                       <td>{{ $user->name}}</td>
                       <td>{{ $user->email}}</td>
                             {{-- <td>
                               {{ $user->roles->pluck('display_name')->implode(' - ') }}
                              </td>
                             <td>
                               <a class="btn btn-info btn-xs"
                                href="{{route('usuarios.edit', $user->id) }}">Editar</a>
                                <form style="display:inline"
                                      method="POST"
                                      action="{{route('usuarios.destroy', $user->id) }}">
                                  {{ csrf_field() }}
                                  {!!method_field('DELETE')!!}
                                  <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                                </form>
                             </td> --}}
                    </tr>
                   @endforeach
            </tbody>
        </table>


  </section>
  <!-- /.content -->
</div>
  @include('partials.__messages')
@endsection

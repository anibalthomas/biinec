@extends('layouts.app')

@section('header')
  <h1>
    POSTS
    <small>Listado</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Posts</li>
  </ol>
@endsection
@section('content')
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Listado de publicaciones</h3>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>  Crear publicaciones</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="posts-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Estracto</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>{!! $post->excerpt !!}</td>
              <td>
                <a href="{{ route('posts.show', $post)}}"
                   class="btn btn-xs btn-default"
                   target="_blank"
                   ><i class="fa fa-eye"></i></a>
                <a href="{{ route('admin.posts.edit', $post)}}"
                class="btn btn-xs btn-info">
                <i class="fa fa-pencil"></i></a>
                <form  method="POST"
                      action="{{ route('admin.posts.destroy', $post)}}"
                      style="display: inline">
                  {{ csrf_field() }} {{ method_field('DELETE')}}
                  <button class="btn btn-xs btn-danger"

                    onclick="return confirm('¿Estás seguro de querer eliminar esta publicación?')"

                    {{-- onclick="swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!' ,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel plx!',
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm) {
        if (isConfirm) {
            swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
        } else {
            swal('Cancelled', 'Your imaginary file is safe :)', 'error');
        }
    }
);" --}}
>
                    <i class="fa fa-times"></i></button>
                </form>

              </td>
            </tr>


          @endforeach
        </tbody>


      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  @include('partials.__messages')
@endsection

@section('modal')

@endsection

@push('styles')
  {{-- <link rel="stylesheet" href="/sweetalert/sweetalert.css"> --}}

  <!-- Datatables -->
 <link rel="stylesheet" href="/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endpush
@push('scripts')
  <script>
       document.querySelector('#from1').addEventListener('submit', function(e) {
           var form = this;
           e.preventDefault();
           swal({
               title: "Are you sure?",
               text: "You will not be able to recover this imaginary file!",
               type: "warning",
               showCancelButton: true,
               confirmButtonColor: '#DD6B55',
               confirmButtonText: 'Yes, I am sure!',
               cancelButtonText: "No, cancel it!",
               closeOnConfirm: false,
               closeOnCancel: false
           },
           function(isConfirm) {
               if (isConfirm) {
                   swal({
                       title: 'Shortlisted!',
                       text: 'Candidates are successfully shortlisted!',
                       type: 'success'
                   }, function() {
                       form.submit();
                   });

               } else {
                   swal("Cancelled", "Your imaginary file is safe :)", "error");
               }
           });
       });

   </script>
  {{-- <script src="/sweetalert/sweetalert.min.js"></script>
  @include('sweet::alert') --}}
  <!-- Datatables -->

  <script src="/adminlte/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
      $('#posts-table').DataTable();

    });
  </script>
@include('admin.posts.create')
@endpush

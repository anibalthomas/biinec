@extends('layouts.app')
@section('header')
  <h1>
    Editar Usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-home glyphicon glyphicon-edit"></i> Edición</a></li>
  </ol>
@endsection
@section('content')


  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">

          <form method="POST"
          action="{{ route('usuarios.update', $user->id) }}"
          enctype="multipart/form-data"
          >
          {!! method_field('PUT')!!}
          <img width="100px" src="{{ Storage::url($user->avatar)}}">
          @include('users.__form')
          <input class="btn btn-primary" type="submit" value="Editar">
        </form>
        {{-- <button type="button" href="{{ route('password')}}" class="btn btn-primary" name="button">Cambiar password</button> --}}
        {{-- <a href="{{ route('password')}}">Cambiar mi password</a> --}}


        </div>
      </div>
    </div>
  </div>





  {{-- <script src="/js/app.js"></script> --}}
@include('partials.__messages')
@endsection
@push('styles')
  <link rel="stylesheet" href="/adminlte/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">

@endpush
@push('scripts')
  {{-- ESTADOS --}}
  {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
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
    {{-- <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script> --}}
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

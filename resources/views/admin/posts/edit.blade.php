@extends('layouts.app')
@section('header')
  <h1>
    POSTS
    <small>Crear publicación</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ route('admin.posts.index')}}"><i class="fa fa-list"></i> Posts</a></li>
    <li class="active">Crear</li>
  </ol>
@endsection
@section('content')
  <div class="row">          {{-- row y col-md-7 formato de columnas de 8 de 12 --}}
      @if ($post->photos->count())

    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                @foreach ($post->photos as $photo)
                    <form method="POST" action="{{ route('admin.photos.destroy', $photo) }}">
                      {{ method_field('DELETE') }}
                        {{ csrf_field() }}

                      <div class="col-md-2">
                        <button class="btn btn-danger btn-xs" style="position: absolute"><i class="fa fa-remove"></i></button>
                        {{-- <img class="img-responsive" src="{{ url($photo->url)}}"> --}}
                          <img class="img-responsive" src="/storage/{{ $photo->url}}">
                      </div>
                    </form>

                @endforeach
            </div>
        </div>
      </div>
    </div>
  @endif
    <form method="POST" action="{{ route('admin.posts.update', $post) }}">
      {{ csrf_field() }}  {{ method_field('PUT') }}
    <div class="col-md-8">

      <div class="box box-primary">

          <div class="box-body">

                    <div class="form-group {{ $errors->has('title') ? 'has-error': ''}}">
                    {{-- <div class="form-group {{ $errors->has('title') ? si tiene un error : no tiene error}}"> --}}
                      <label>Título de la publicación</label>
                      <input name="title"
                             class="form-control"
                             value="{{ old('title', $post->title) }}"
                             placeholder="Ingresa aqui el titulo de la publicación">
                      {!! $errors->first('title', '<span class="help-block">:message</span>')!!}
                                  {{-- nombre del cambio                  mensaje automatico --}}
                    </div>

                    <div class="form-group {{ $errors->has('ncientifico') ? 'has-error': ''}}">
                      <label>Nombre Cientifico</label>
                      <input name="ncientifico"
                             class="form-control"
                             value="{{ old('ncientifico', $post->ncientifico) }}"
                             placeholder="Ingresa aqui el nombre científico">
                      {!! $errors->first('ncientifico', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{ $errors->has('excerpt') ? 'has-error': ''}} ">
                      <label>Descripción</label>
                      <textarea name="excerpt"
                                id="editor"
                                class="form-control"
                                placeholder="Ingresa una descripción">{{ old('excerpt', $post->excerpt)}}</textarea>
                      {!! $errors->first('excerpt', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{ $errors->has('area') ? 'has-error': ''}}">
                        <label> Area de Adscripción</label>
                        <select  name="area" class="form-control" name="">
                            <option value="">Selecciona un area</option>
                            @foreach ($areas as $area)
                                  <option value="{{ $area->id }}"
                                      {{ old('area', $post->area_id) == $area->id ? 'selected' : ''}}
                                    >{{ $area->name }}</option>
                            @endforeach
                        </select>
                          {!! $errors->first('area', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{ $errors->has('lugar') ? 'has-error': ''}}">
                          <label> Lugar</label>
                      <select  name="lugar" class="form-control" name="">
                          <option value="">Selecciona un lugar</option>
                          @foreach ($lugares as $lugar)
                                <option value="{{ $lugar->id }}"
                                    {{ old('lugar', $post->lugar_id) == $lugar->id ? 'selected' : ''}}
                                  >{{ $lugar->name }}</option>
                          @endforeach
                      </select>
                          {!! $errors->first('lugar', '<span class="help-block">:message</span>')!!}
                    </div>


                    <div class="form-group {{ $errors->has('ubicacion') ? 'has-error': ''}}">
                      <label>Ubicación</label>
                      <input name="ubicacion"
                              id="coords"
                              class="form-control"
                              value="{{ old('ubicacion', $post->ubicacion) }}"
                              placeholder="coordenadas"readonly/>

                      <button type="button"
                              class="btn btn-primary"
                              data-toggle="modal"
                              data-target="#mapa"
                              {{-- onclick="initMap()" --}}
                              >Mapa</button>
                      {!! $errors->first('ubicacion', '<span class="help-block">:message</span>')!!}
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="mapa" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">

                            <h4 class="modal-title">Ubicación</h4>
                          </div>

                          <div id="map" class="panel body"></div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>

                      </div>
                    </div>

           </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-body">

                <div class="form-group">
                      <label>Fecha de publicación:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="published_at"
                               type="text"
                               class="form-control pull-right"
                               value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') :
                                  null)}}"
                               id="datepicker">
                      </div>
                  </div>

            <div class="form-group {{ $errors->has('category') ? 'has-error': ''}}">
                <label> Categorías</label>
                  <select  name="category" class="form-control" name="">
                      <option value="">Selecciona una categoría</option>
                      @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category', $post->category_id) == $category->id ? 'selected' : ''}}
                              >{{ $category->name }}</option>
                      @endforeach
                  </select>
                  {!! $errors->first('category', '<span class="help-block">:message</span>')!!}
            </div>

                    <div class="form-group {{ $errors->has('tags') ? 'has-error': ''}}">
                      <label>Etiquetas</label>
                      <select name="tags[]" class="form-control select2"
                              multiple="multiple"
                              data-placeholder="Selecciona una o más etiquetas" style="width: 100%;">
                        @foreach ($tags as $tag)
                            <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : ''}}
                                    value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                      </select>
                      {!! $errors->first('tags', '<span class="help-block">:message</span>')!!}
                    </div>


          <div class="form-group">
            <div class="dropzone">

            </div>
          </div>
          <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Guardar Publicación</button>
          </div>
        </div>
      </div>

    </div>

  </form>

  </div>



  @include('partials.__messages')
@endsection
@push('styles')
<link rel="stylesheet" href="/mapa/stylemapa.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css">
<link rel="stylesheet" href="/adminlte/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="/adminlte/select2/dist/css/select2.min.css">
@endpush
@push('scripts')
<script src="/mapa/localiza2.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDVZqDBRMRB0pIc6ygIY-a5-vwB1MoEu7A"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
<script src="/adminlte/select2/dist/js/select2.full.min.js"></script>
<script src="/adminlte/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/adminlte/ckeditor/ckeditor.js"></script>
<script>
$('#datepicker').datepicker({
  autoclose: true
})
$('.select2').select2();
              // CKEDITOR  //
CKEDITOR.replace('editor');
// CKEDITOR.config.height = 328;   // la altura de editor de texto
var myDropzone = new Dropzone('.dropzone', {
    url: '/admin/posts/{{ $post->url}}/photos',
    // acceptedFiles: 'image/*',
    // mxFilesize: 2,
    maxFiles: 3,
    paramName: 'photo',
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token()}}'
    },
    dictDefaultMessage: 'Arrastra las fotos aqui para subirlas',
    // dictMaxFilesExceeded: 'Limite de imagenes excedido'
});
myDropzone.on('error', function(file, res){
  var msg = res.photo[0];
  $('.dz-error-message:last > span').text(msg);
})
Dropzone.autoDiscover = false;
</script>
@endpush

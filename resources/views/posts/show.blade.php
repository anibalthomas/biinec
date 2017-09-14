@extends('layouts.appGaleria')
 <br>
 <br>
 <br>
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)
@section('content')
<style>
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      padding: 7px;
      text-align: left;
      border-bottom: 1px solid #ddd;
  }
  </style>

<div class="container">
    <div class="row">
      <div class="col-md-6">
<br>
        {{-- <figure><img src="{{ $post->photos->first()->url }}" class="img-responsive" alt=""></figure> --}}
        <figure><img src="/storage/{{ $post->photos->first()->url }}" class="img-responsive" alt=""></figure>
      </div>
        <div class="col-md-6">
          <h1 style="margin: 0px 0 10px;">{{ $post->title }}</h1>

          <table>
            <tr>
              <td>Nombre Cientifico:</td>
              <td>({{ $post->ncientifico}})</td>
            </tr>
            <tr>
              <td>Descripción:</td>
              <td>{{  $post->excerpt}}</td>
            </tr>
            <tr>
              <td>Área o red de Adscripción:</td>
              <td>{{ $post->area->name }}</td>
            </tr>
            <tr>
              <td>Lugar:</td>
              <td>{{ $post->lugar->name }}</td>
            </tr>
            <tr>
              <td>Fecha de publicación</td>
              <td>{{ $post->published_at->toFormattedDateString() }}</td>
            </tr>
            <tr>
              <td>Categoría</td>
              <td><a href="{{ route('categories.show', $post->category)}}">{{ $post->category->name }}</a></td>
            </tr>
            <tr>
              <td>Etiquetas</td>
              <td>
                @foreach($post->tags as $tag)
                  <span class="tag c-gris text-capitalize"><a href="{{ route('tags.show', $tag)}}">#{{ $tag->name }}</a></span>
                @endforeach
              </td>
            </tr>
            <tr>
              <td>Descargar</td>
              <td><a href="{{$post->photos->first()->url}}" download="{{ $post->title }}"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
              <td>Compartir</td>
              <td>@include('partials.social-links', ['description' => $post->title])</td>
            </tr>
          </table>
          <br>

        </div>
      </div>
      <br>



      <ul class="nav nav-tabs">
        <li><a data-toggle="tab" onclick="iniciar();" href="#home">Ubicación</a></li>
      </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade">

                        @include('partials.__mapa')
                        <div id="map" style="width:100%;height:500px"></div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVZqDBRMRB0pIc6ygIY-a5-vwB1MoEu7A&sensor=false">
                        </script>
        </div>

      </div>
<br>
<br>
                    <div class="comments">
                    <div class="divider"></div>
                      <div id="disqus_thread"></div>
                      @include('partials.disqus-script')
                    </div><!-- .comments -->


</div>
@endsection
@push('styles')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="/css/twitter-bootstrap.css">
@endpush

@push('scripts')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script id="dsq-count-scr" src="//biinec.disqus.com/count.js" async></script>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
   <script  src="/js/twitter-bootstrap.js" async></script>
@endpush

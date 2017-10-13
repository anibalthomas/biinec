<li class="active"><a href="{{ url('/') }}">Inicio</a></li>

    <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Redes Académicas <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="{{ url('index')}}">Index</a></li>
    <li><a href="{{ url('categorias/ambiente-y-sustentabilidad' )}}">Ambiente y Sustentabilidad</a></li>
    <li><a href="{{ url('categorias/biología-evolutiva' )}}">Biología Evolutiva</a></li>
    <li><a href="{{ url('categorias/biología-y-conservacíon-de-vertebrados' )}}">Biología y Conservación de Vertebrados</a></li>
    <li><a href="{{ url('categorias/biodiversidad-y-sistématicas' )}}">Biodiversidad y Sistématica</a></li>
    <li><a href="{{ url('categorias/ecoetología' )}}">Ecoetología</a></li>
    <li><a href="{{ url('categorias/ecología-funcional' )}}">Ecología Funcional</a></li>
    <li><a href="{{ url('categorias/estudios-moleculares-avanzados' )}}">Estudios Moleculares Avanzados</a></li>
    <li><a href="{{ url('categorias/interacciones-multitróficas' )}}">Interacciones Multitróficas</a></li>
    <li><a href="{{ url('categorias/manejo-biotecnológico-de-recursos' )}}">Manejo Biotecnológico de Recursos</a></li>
    <li><a href="{{ url('categorias/manejo-biorracional-de-plagas-y-vectores' )}}">Manejo Biorracional de Plagas y Vectores</a></li>

  </ul>
</li>
    <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instalaciones del INECOL <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="{{ url('categorias/jardín-botánico' )}}">Jardín Botánico</a></li>
    <li><a href="{{ url('categorias/santuario-del-bosque-de-niebla' )}}">Santuario del Bosque de Niebla</a></li>
    <li><a href="{{ url('categorias/posgrado-inecol' )}}">Posgrado INECOL</a></li>
    <li><a href="{{ url('categorias/uspae' )}}">USPAE</a></li>
    <li><a href="{{ url('categorias/centro-regional-pátzcuaro' )}}">Centro Regional Pátzcuaro</a></li>
    <li><a href="{{ url('categorias/cicolma' )}}">CICOLMA</a></li>
    <li><a href="{{ url('categorias/laboratorio-del-desierto-mapimí' )}}">Laboratorio del Desierto Mapimí</a></li>
    <li><a href="{{ url('categorias/estación-de-trabajo-piedra-herrada' )}}">Estación de trabajo Piedra Herrada</a></li>
    <li><a href="{{ url('categorias/sede-xalapa' )}}">Sede Xalapa</a></li>
    <li><a href="{{ url('categorias/Administración' )}}">Administración</a></li>
    <li><a href="{{ url('categorias/clúster-científico-y-tecnológico-biomimic' )}}">Clúster Cientifico y Tecnológico BioMimic®</a></li>
    <li><a href="{{ url('categorias/centro-de-reclutamiento-de-nuevos-talentos-de-la-ciencia' )}}">Centro de Reclutamiento de Nuevos Talentos de la CIencia</a></li>
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="{{ url('categorias/festival-de-aves-y-humedales' )}}">Festival de Aves y Humedales</a></li>
    <li><a href="{{ url('categorias/carrera-verde' )}}">Carrera Verde</a></li>
    <li><a href="{{ url('categorias/casa-abierta' )}}">Casa Abierta</a></li>
    <li><a href="{{ url('categorias/fomento-a-la-carrera-científica' )}}">Fomento a la Carrera Científica</a></li>
  </ul>
</li>

<li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Panel <b class="caret"></b></a>
       <ul class="dropdown-menu">
      @if (Route::has('login'))
          @if (Auth::check())
             <li><a href="{{ url('/home') }}">Home</a></li>
          @else
             <li><a href="{{ url('/login') }}">Login</a></li>
             <li><a href="{{ url('/register') }}">Registro</a></li>
          @endif
     @endif


       </ul>
     </li>

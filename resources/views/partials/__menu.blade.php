<li class="active"><a href="{{ url('/') }}">Inicio</a></li>

    <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Redes Académicas <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="galeria1">Index</a></li>
    <li><a href="{{ url('categorias/categoria-1' )}}">Ambiente y Sustentabilidad</a></li>
    <li><a href="{{ url('categorias/categoria-2' )}}">Biología Evolutiva</a></li>
    <li><a href="galeria3">Biología y Conservación de Vertebrados</a></li>
    <li><a href="galeria4">Biodiversidad y Sistématica</a></li>
    <li><a href="#">Ecoetología</a></li>
    <li><a href="#">Ecología Funcional</a></li>
    <li><a href="#">Estudios Moleculares Avanzados</a></li>
    <li><a href="#">Interacciones Multitróficas</a></li>
    <li><a href="#">Manejo Biotecnológico de Recursos</a></li>
    <li><a href="#">Manejo Biorracional de Plagas y Vectores</a></li>

  </ul>
</li>
    <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instalaciones del INECOL <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="#">Jardín Botánico</a></li>
    <li><a href="#">Santuario del Bosque de Niebla</a></li>
    <li><a href="#">Posgrado INECOL</a></li>
<li><a href="#">USPAE</a></li>
<li><a href="#">Centro Regional Pátzcuaro</a></li>
<li><a href="#">CICOLMA</a></li>
<li><a href="#">Laboratorio del Desierto Mapimí</a></li>
<li><a href="#">Estación de trabajo Piedra Herrada</a></li>
<li><a href="#">Sede Xalapa</a></li>
<li><a href="#">Administración</a></li>
<li><a href="#">Clúster Cientifico y Tecnológico BioMimic®</a></li>
<li><a href="#">Centro de Reclutamiento de Nuevos Talentos de la CIencia</a></li>
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="#">Festival de Aves y Humedales</a></li>
    <li><a href="#">Carrera Verde</a></li>
<li><a href="#">Casa Abierta</a></li>
    <li><a href="#">Fomento a la Carrera Científica</a></li>
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
             <li><a href="{{ url('/register') }}">Register</a></li>
          @endif
     @endif


       </ul>
     </li>

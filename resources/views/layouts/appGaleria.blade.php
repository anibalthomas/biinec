<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIINEC - Banco de Imagenes del INECOL</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('css/animate.css')!!}
    {!!Html::style('css/style.css')!!}
    {{-- {!!Html::style('css/style1.css')!!} --}}
    {!!Html::style('color/default.css')!!}
    <!-- GALERIA -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main2.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    {{-- {!!Html::style('css/normalize.css')!!}
    {!!Html::style('css/framework.css')!!}
    {!!Html::style('css/style3.css')!!}
    {!!Html::style('css/responsive.css')!!}
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> --}}

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	 <div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>BIINEC</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Inicio</a></li>

  		   <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Redes Académicas <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="galeria1">Ambiente y Sustentabilidad</a></li>
              <li><a href="galeria2">Biología Evolutiva</a></li>
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
      </ul>
  </div>
            <!-- /.navbar-collapse -->
</div>
        <!-- /.container -->
</nav>
@yield('content')
	<!-- /Section: contact -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>&copy;SquadFREE. All rights reserved.</p>
                    <div class="credits">
                        <!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                        -->
                        <a href="#">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>
		</div>
	</footer>
  <!-- Core JavaScript Files -->
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.easing.min.js')!!}
    {!!Html::script('js/jquery.scrollTo.js')!!}
    {!!Html::script('js/wow.min.js')!!}
      <!-- Custom Theme JavaScript -->
    {!!Html::script('js/custom2.js')!!}
    {!!Html::script('contactform/contactform.js')!!}


      <!--   GALERIA -->
      <script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/jquery.singlePageNav.min.js"></script>
      <script src="js/jquery.fancybox.pack.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.slitslider.js"></script>
      <script src="js/main2.js"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <title>@yield('meta-title','BIINEC' . " | Banco de Imagenes del INECOL")</title>
    <meta name="description" content="@yield('meta-content','Este es el banco de imagenes del Instituto de Ecología ')">

    <!-- Bootstrap Core CSS -->
    {!!Html::style('/front/css/bootstrap.min.css')!!}
    {!!Html::style('/front/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('/front/css/animate.css')!!}
    {!!Html::style('/front/css/style.css')!!}
    {{-- {!!Html::style('css/style1.css')!!} --}}
    {!!Html::style('/front/color/default.css')!!}
    <!-- GALERIA -->
    <link rel="stylesheet" href="/galeria/css/font-awesome.min.css">
    <link rel="stylesheet" href="/galeria/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/galeria/css/main2.css">
    <script src="/galeria/js/modernizr-2.6.2.min.js"></script>
    {{-- {!!Html::style('css/normalize.css')!!}
    {!!Html::style('css/framework.css')!!}
    {!!Html::style('css/style3.css')!!}
    {!!Html::style('css/responsive.css')!!}
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> --}}

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	 {{-- <div id="preloader">
	  <div id="load"></div>
	</div> --}}

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="responsive">
                  <a href="http://www.inecol.mx">
                    <img src="/front/img/logocol.png" style="height: 50px;float: left;margin-right: 9px;" class="responsive" alt="">
                  </a>
                  <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>BIINEC</h1>
                  </a>
                  <a href="https://www.conacyt.gob.mx/">
                    <img src="/front/img/conacyt.png" style="height: 27px; margin-top: 11px;" alt="">
                  </a>

              </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
  @include('partials.__menu')
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
          <p>Carretera Antigua a Coatepec 351 El Haya, Xalapa, Veracruz cp. 91070</p>
          <p>Tel. +52 (228)8421800</p>
				</div>
			</div>
		</div>
	</footer>
<!-- Core JavaScript Files -->
{!!Html::script('/front/js/jquery.min.js')!!}
{!!Html::script('/front/js/bootstrap.min.js')!!}
{!!Html::script('/front/js/jquery.easing.min.js')!!}
{!!Html::script('/front/js/jquery.scrollTo.js')!!}
{!!Html::script('/front/js/wow.min.js')!!}
<!-- Custom Theme JavaScript -->
{!!Html::script('/front/js/custom2.js')!!}
{!!Html::script('/front/contactform/contactform.js')!!}
<!--   GALERIA -->
<script src="/galeria/js/jquery-1.11.1.min.js"></script>
<script src="/galeria/js/jquery.singlePageNav.min.js"></script>
<script src="/galeria/js/jquery.fancybox.pack.js"></script>
<script src="/galeria/js/owl.carousel.min.js"></script>
<script src="/galeria/js/jquery.slitslider.js"></script>
<script src="/galeria/js/main2.js"></script>
</body>
</html>

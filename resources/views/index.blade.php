<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIINEC - Banco de Imagenes del INECOL</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('/front/css/bootstrap.min.css')!!}
    {!!Html::style('/front/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('/front/css/animate.css')!!}
    {!!Html::style('/front/css/style.css')!!}
    {!!Html::style('/front/color/default.css')!!}

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

	<!-- Section: intro -->
    <section id="intro" class="intro">

		<div class="slogan">
			<h2>BIENVENIDOS A <span class="text_color">BIINEC</span> </h2>
			<h4>BANCO DE IMAGENES DEL INECOL</h4>
		</div>

   ---	<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->



	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">

		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Nuestros Servicios</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="/front/img/icons/icons8-Alta importancia-50.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>Información acerca del sitio</h5>
						<p>BIINEC, es un banco de imágenes creado por los cientificos de INECOL para poder compartir imágenes relacionadas con el
              que hacer científico y sean de utilidad en la generación de conocimiento a partir de recursos visuales. Este stock de
              imágenes es gratutito para usos académicos, educativos, lúdicos en completo beneficio para la sociedad.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="/front/img/icons/icons8-Ayuda-50.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>¿Cómo funciona?</h5>
						<p>Este  portal permite buscar imágenes científicas relacionadas a las diez Redes temáticas y a las diferentes áreas del
              INECOL, todas estas imágenes son libre de derecho para usos educativos y/o sociales, además pueden utilizarse como
              acervo documental para investigaciones en proceso respetando y citando debidamente a la Institución y al autor de
              dicha obra.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="/front/img/icons/service-icon-3.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>----------</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="/front/img/icons/service-icon-4.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>------------</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
        </div>
		</div>
	</section>
	<!-- /Section: services -->




	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Contáctanos</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">

                <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
                <div id="errormessage"></div>
                <form id="contact-form" action="" method="post" role="form" class="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Asunto</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar mensaje</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Oficina principal</h5>

				<address>
				  <strong>Enlace con la Sociedad</strong><br>
          Carretera Antigua a Coatepec 351 <br>
          El Haya, Xalapa, Veracruz cp. 91070<br>
				  Campus I, Edificio B, nivel 2<br>
				  <abbr title="Phone">Tel.</abbr> +52 (228)8421800, ext(1006)
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">guillermo.lopez@inecol.mx</a>
				</address>
				<address>
				  <strong>Estamos en redes sociales</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/inecolxalapa/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/inecol_mx?lang=es" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="https://www.youtube.com/channel/UCPQmkvbcPBah5n9AWQRE76g" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
				</address>
			</div>
		</div>
    </div>

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>Carretera Antigua a Coatepec 351 El Haya, Xalapa, Veracruz cp. 91070</p>
          <p>Tel. +52 (228)8421800</p>
				</div>
			</div>
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="/front/js/jquery.min.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>
    <script src="/front/js/jquery.easing.min.js"></script>
	   <script src="/front/js/jquery.scrollTo.js"></script>
	    <script src="/front/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/front/js/custom.js"></script>
    <script src="/front/contactform/contactform.js"></script>

</body>

</html>

@extends('layouts.appGaleria')

@section('content')


<!--portfolio-->
<section id="portfolio">
	<div class="container">
		<div class="row">

			<div class="sec-title text-center wow animated fadeInDown">
				<br><br><br>
				<h2>Imágenes</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			@if (isset($title))
				<h3>{{ $title }}</h3>
			@endif
			<ul class="project-wrapper wow animated fadeInUp">
@foreach ($posts as $post)

	<li class="portfolio-item">

		<img style="height: 284.967px;"src="{{ $post->photos->first()->url }}" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur
		 adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		 ullamco laboris nisi ut aliquip ex ea commodo consequat">

	<figcaption class="mask">
			<h3>Nombre de Especie</h3>
			<p>(Descripción o nombre científico)</p>
		</figcaption>
		<ul class="external">
			<li><a class="fancybox" title="Nombre de especie F" data-fancybox-group="works" href="{{ $post->photos->first()->url }}"><i class="fa fa-eye"></i></a></li>
			<li><a href="galeria/{{ $post->url }}"><i class="fa fa-link"></i></a></li>
		</ul>
	</li>
@endforeach
			</ul>

		</div>
	</div>
</section>
<div style="text-align:center;" class="">
	{{ $posts->links() }}
</div>

@endsection

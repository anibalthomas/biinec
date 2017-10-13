@extends('layouts.appGaleria')

@section('content')


<!--portfolio-->
<section id="portfolio">
	<div class="container">
		<div class="row">

			<div class="sec-title text-center wow animated fadeInDown">
				<br><br><br>

				@if (isset($title))
					<h2>{{ $title }}</h2>
				@else
					<h2>Galería de Imagenes</h2>
				@endif
				{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
			</div>
	<ul class="project-wrapper wow animated fadeInUp">
		@foreach ($posts as $post)

			<li class="portfolio-item">

				{{-- <img style="height: 284.967px;"src="{{ $post->photos->first()->url }}" class="img-responsive" alt="{{$post->excerpt}}"> --}}
				<img style="height: 284.967px;"src="/storage/{{ optional($post->photos->first())->url }}" class="img-responsive" alt="{{$post->excerpt}}">

				<figcaption class="mask">
					<h3>{{$post->title}}</h3>
					<p>{{$post->ncientifico}}</p>
				</figcaption>
				<ul class="external">
					{{-- <li><a class="fancybox" title="{{$post->title}}" data-fancybox-group="works" href="{{ $post->photos->first()->url }}"><i class="fa fa-eye"></i></a></li> --}}
					<li><a class="fancybox" title="{{$post->title}}" data-fancybox-group="works" href="/storage/{{ optional($post->photos->first())->url }}"><i class="fa fa-eye"></i></a></li>
					<li><a href="/galeria/{{ $post->url }}"><i class="fa fa-info-circle"></i></a></li>
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

@extends('layouts.appGaleria')
 <br>
 <br>
 <br>
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)
@section('content')
<article class="post container">
    <div class="row">
      <div class="col-md-6">
        <figure><img src="{{ $post->photos->first()->url }}" class="img-responsive" alt=""></figure>
      </div>
        <div class="col-md-6">
          <h1>{{ $post->title }}</h1>
          <span >{{ $post->published_at->format('M d') }}</span><br>
							<a href="{{ route('categories.show', $post->category)}}">{{ $post->category->name }}</a>
          {{-- {!! $post->body !!}<br> --}}
          @foreach($post->tags as $tag)
            <span class="tag c-gris text-capitalize"><a href="{{ route('tags.show', $tag)}}">#{{ $tag->name }}</a></span>
          @endforeach
          <br>
          <br>
          @include('partials.social-links', ['description' => $post->title])
        </div>
      </div>

    <div class="comments">
    <div class="divider"></div>
      <div id="disqus_thread"></div>

      @include('partials.disqus-script')

    </div><!-- .comments -->
    </div>
</article>
@endsection
@push('styles')
  <link rel="stylesheet" href="/css/twitter-bootstrap.css">
@endpush

@push('scripts')
   <script id="dsq-count-scr" src="//biinec.disqus.com/count.js" async></script>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
   <script  src="/js/twitter-bootstrap.js" async></script>
@endpush

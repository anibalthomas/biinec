<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Banco de Imagenes</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
@stack('styles')
<link rel="stylesheet" href="/adminlte/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="/adminlte/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/adminlte/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/adminlte/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
{{-- toastr --}}
<link rel="stylesheet" type="text/css" href="/css/app.css">

<script>
window.Laravel = {!! json_encode([
'csrfToken' => csrf_token(),
]) !!};
</script>

{{-- ////////toastr/////////////////////////////////////////////////////////////// --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/adminlte/img/2.png"  alt="logo"style="max-width: 83%;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="/front/img/logocol.png"
        style="height: 50px;" class="responsive" alt=""></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
@include('partials.__navbarright')
    </nav>
  </header>

@include('partials.__sidebar')
<div class="content-wrapper">
    <section class="content-header">
      @yield('header')
    </section>
    <section class="content">
      @yield('content')
    </section>
</div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <a href="http://www.inecol.mx">inecol.mx</a>
    </div>
    <strong>Instituto de Ecología, A.C.</strong>
  </footer>
</div>

<script src="/adminlte/jquery/dist/jquery.min.js"></script>
<script src="/adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/adminlte/js/app.min.js"></script>
@unless (request()->is('admin/posts/*'))
  @include('admin.posts.create')
@endunless
@stack('scripts')


</body>
</html>

<!DOCTYPE html>
<html>

@include('partials.__head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="dist/img/2.png"  alt="logo"style="max-width: 83%;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>I</b>NECOL</span>
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
@yield('content')
@include('partials.__footer')


</body>
</html>

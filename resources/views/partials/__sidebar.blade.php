@php
  function activeMenu($url){
    return request()->is($url) ? 'active' : '';
  }
@endphp

<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}
          {{-- {{ Auth::user()->role->display_name}} --}}
        </p>

        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Navegación</li>
      <!-- Optionally, you can add icons to the links -->
      <li {{ request()->is('home') ? 'class=active' : '' }}>
        <a href="{{ route('home')}}">
            <i class="fa fa-dashboard"></i> <span>Inicio</span>
        </a>
      </li>

@if (auth()->check())

      {{-- @if (auth()->user()->role->name === 'admin') --}}
      @if (auth()->user()->hasRoles(['admin']) )


        <li class="{{ activeMenu('usuarios')}} {{ activeMenu('registrar')}} treeview">
          <a href="#"><i class="fa fa-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ activeMenu('usuarios')}}"><a href="{{route('usuarios.index')}}"><i class="fa fa-users"></i>Listar</a></li>
            <li class="{{ activeMenu('registrar')}}"><a href="{{route('usuarios.create')}}"><i class="fa fa-user-plus"></i>Registrar</a></li>
          </ul>
        </li>
      @endif

@endif

<li class="treeview
{{ request()->is('admin/posts*') ? 'active' : '' }}
">
  <a href="#"><i class="fa fa-bars"></i> <span>Blog</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
  </a>
  <ul class="treeview-menu">
    <li
    {{ request()->is('home/posts') ? 'class=active' : '' }}
    ><a href="
    {{ route('admin.posts.index')}}
    "><i class="fa fa-eye"></i>
    Ver todos los pots</a>
    </li>
    <li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa
     fa-pencil"></i>Crear un post</a>
    </li>
  </ul>
</li>




    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

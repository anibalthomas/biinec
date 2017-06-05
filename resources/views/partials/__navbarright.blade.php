<div class="navbar-custom-menu">

  <ul class="nav navbar-nav">
    <!-- Messages: style can be found in dropdown.less-->


      <!-- Menu toggle button -->
              <li><a href="{{ route('mensajes' )}}">Enviar Mensaje</a></li>
              <li><a href="{{ route('notifications.index')}}">Notificaciones
                @if ($count = Auth::user()->unreadNotifications->count())

                  <span class="badge">{{ $count }}</span>
                @endif
                  </a>
              </li>
    <!-- User Account Menu -->
    <li class="dropdown user user-menu">
      <!-- Menu Toggle Button -->
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="{{ Storage::url(Auth::user()->avatar)}}" class="user-image" alt="User Image">
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu">
        <!-- The user image in the menu -->
        <li class="user-header">
          <img src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="User Image">

          <p>
            {{ Auth::user()->name }} -
            {{-- {{ Auth::user()->role->display_name}} --}}
            <small>Miembro desde {{ Auth::user()->created_at->diffForHumans()}}</small>  {{-- toFormattedDateString --}}
          </p>
        </li>

        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="pull-left">
            <a href="/usuarios/{{ auth()->id()}}/edit" class="btn btn-default btn-flat">Mi Cuenta</a>
          </div>
          <div class="pull-right">

            <a href="{{ route('logout') }}"
                class="btn btn-default btn-flat"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Salir
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
          </div>
        </li>
      </ul>
    </li>
    <!-- Control Sidebar Toggle Button -->

  </ul>
</div>

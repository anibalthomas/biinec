{{ csrf_field() }}

<p><label for="avatar">
  <input type="file" name="avatar">
      {!! $errors->first('avatar', '<span class=error>:message</span>')!!}
</label></p>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{ $user->name or old('name')}}" autofocus required>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('apellidop') ? ' has-error' : '' }}">
    <label for="apellidop" class="col-md-4 control-label">Primer Apellido</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="apellidop" value="{{ $user->apellidop or old('apellidop') }}"  autofocus required>

        @if ($errors->has('apellidop'))
            <span class="help-block">
                <strong>{{ $errors->first('apellidop') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('apellidom') ? ' has-error' : '' }}">
    <label for="apellidom" class="col-md-4 control-label">Segundo Apellido</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="apellidom" value="{{ $user->apellidom or old('apellidom') }}"  autofocus required>

        @if ($errors->has('apellidom'))
            <span class="help-block">
                <strong>{{ $errors->first('apellidom') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group {{ $errors->has('area_id') ? 'has-error': ''}}">
    <label class="col-md-4 control-label"> Área de Adscripción</label>
      <div class="col-md-6">
          <select  name="area_id" class="form-control" name="" type="selected" required>
              <option value="">Selecciona una área</option>
              @foreach ($areas as $area)
                    <option value="{{ $area->id }}"
                        {{ $user->area->id == $area->id ? 'selected' : ''}}
                      >{{ $area->name }}</option>
              @endforeach
          </select>
          <strong> {!! $errors->first('area_id', '<span class="help-block">:message</span>')!!}  </strong>
      </div>
  </div>

  <div class="form-group {{ $errors->has('genero') ? 'has-error': ''}}">
      <label class="col-md-4 control-label"> Género</label>
        <div class="col-md-6">
            <select  name="genero" class="form-control"  type="selected" required>
                <option value="{{ $user->genero }}">Selecciona un género</option>
                <option value="1" {{ $user->genero == 1 ? 'selected' : '' }} >Masculino</option>
                <option value="2" {{ $user->genero == 2 ? 'selected' : '' }} >Femenino</option>
            </select>
            <strong> {!! $errors->first('genero', '<span class="help-block">:message</span>')!!}  </strong>
        </div>
  </div>

  <div class="form-group{{ $errors->has('fechan') ? ' has-error' : '' }}">
      <label for="fechan" class="col-md-4 control-label">Fecha de Nacimiento</label>
      <div>
          <div class="col-md-6 input-group date" style="padding-left: 15px;padding-right: 15px;">
            <div class="input-group-addon" style="background-color: white;">
              <i class="fa fa-calendar"></i>
            </div>
            <input id="datepicker" type="text" placeholder="mm/dd/aaaa"
            class="form-control" name="fechan" value="{{ Carbon\Carbon::parse($user->fechan)->format('m/d/Y') }}"  required autofocus>
           </div>
            @if ($errors->has('fechan'))
                <span class="help-block calendarmod" style="padding-left: 265px;">
                    <strong>{{ $errors->first('fechan') }}</strong>
                </span>
            @endif
      </div>
  </div>



  <div class="form-group {{ $errors->has('estado_id') ? 'has-error': ''}}">
      <label class="col-md-4 control-label"> Estado</label>
        <div class="col-md-6">
            <select  name="estado_id" id="state" class="form-control" name="" type="selected" required>
                <option value="">Selecciona un estado</option>
                @foreach ($states as $state)
                      <option value="{{ $state->id }}"
                          {{ $user->estado->id == $state->id ? 'selected' : ''}}
                        >{{ $state->name }}</option>
                @endforeach
            </select>
            <strong> {!! $errors->first('estado_id', '<span class="help-block">:message</span>')!!}  </strong>
        </div>
    </div>

    <div class="form-group {{ $errors->has('ciudad_id') ? 'has-error': ''}}">
        <label class="col-md-4 control-label"> Ciudad</label>
          <div class="col-md-6">
              <select  name="ciudad_id" class="form-control" id="town" type="selected" required>
                <option value="1">Selecciona una ciudad</option>
                @foreach ($towns as $town)
                      <option value="{{ $town->id }}"
                          {{ $user->ciudad->id == $town->id ? 'selected' : ''}}
                        >{{ $town->name }}</option>
                @endforeach
              </select>
              <strong> {!! $errors->first('ciudad_id', '<span class="help-block">:message</span>')!!}  </strong>
          </div>
    </div>

    <div class="form-group
    {{ $errors->has('url') ? ' has-error' : '' }}
    ">
        <label for="url" class="col-md-4 control-label">URL</label>
        <div>
            <div class="col-md-6 input-group" style="padding-left: 15px;padding-right: 15px;">
              <div class="input-group-addon" style="background-color: white;">
                <h5 style="margin: 1px;">http://</h5>
              </div>
              <input id="datepicker" type="text"
              class="form-control" name="url" value="{{ $user->url }}"  required autofocus>
            </div>
              @if ($errors->has('url'))
                  <span class="help-block" style="padding-left: 265px;">
                      <strong>{{ $errors->first('url') }}</strong>
                  </span>
              @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Dirección de correo electrónico</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>



@unless ($user->id)
	<p><label for="password">
		Password
		<input class="form-control" type="password" name="password">
		{!! $errors->first('password', '<span class=error>:message</span>') !!}
	</label></p>

	<p><label for="password_confirmation">
		Password Confirm
		<input class="form-control" type="password" name="password_confirmation">
		{!! $errors->first('password_confirmation', '<span class=error>:message</span>') !!}
	</label></p>
@endunless

{{-- value="{{ $user->password or old('password')}}" --}}

{{-- <div class="form-group">
      <label>Apellido Paterno</label>
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
   <div class="form-group">
      <label>Apellido Materno</label>
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label>Red</label>
      <select class="form-control select2" style="width: 100%;">
        <option selected="selected">Default</option>
        <option>Enlace</option>
        <option>Jardin Botanico</option>
      </select>
    </div> --}}



    @if (auth()->check())
<br><hr>
          {{-- @if (auth()->user()->role->name === 'admin') --}}
          @if (auth()->user()->hasRoles(['admin']) )
        <div class="">

          <label for="fechan" class="col-md-4 control-label">Rol</label>


          <div class="checkbox">
            @foreach ($roles as $id => $name)
              <label>
                <input type="checkbox" value="{{ $id }}"
                {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
                name="roles[]">

                {{ $name }}

              </label>
            @endforeach
          </div>
          {!! $errors->first('roles', '<span class=error>:message</span>') !!}
        </div>
              <hr>
          @endif
    @endif

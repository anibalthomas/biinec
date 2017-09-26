<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Area;
use App\State;
use App\Town;
use Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Validator;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('auth');
       $this->middleware('roles:admin',['except'=>['edit','update','password']]);
     }
    public function index()
    {
      $users = User::all();
       return view('users.index',compact('users'),compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles = Role::pluck('display_name','id');
        //
        // return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
      // $user = User::create( $request->all() );
      $user = (new User)->fill($request->all() );

      if ($request->hasFile('avatar'))
      {
        $user->avatar = $request->file('avatar')->store('public');  // el nombre dentro de store, creara una carpeta con el nombre dentro de storage
      }
      $user->save();

      $user->roles()->attach($request->roles);

      return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->authorize($user);

        $roles = Role::pluck('display_name', 'id');
        $areas = Area::all();
        $states = State::all();
        $towns = Town::all();

        return view('users.edit', compact('user','roles','areas','states','towns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateUserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {

        $user = User::findOrFail($id);

        $this->authorize($user);

        if ($request->hasFile('avatar'))
        {
          $user->avatar = $request->file('avatar')->store('public');  // el nombre dentro de store, creara una carpeta con el nombre dentro de storage
        }

        $user->update($request->only(
          'name',
          'apellidop',
          'apellidom',
          'email',
          'area_id',
          'genero',
          'estado_id',
          'ciudad_id',
          'url'

        ));
        $user->fechan = $request->has('fechan') ? Carbon::parse($request->get('fechan')) : null;
        $user->save();

        $user->roles()->sync($request->roles);

        return back()->with('info', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $user = User::findOrFail($id);

        //  $this->authorize($user); ----------------problema aquí

         $user->delete();

        return back()->with('warning','Usuario Eliminado');

    }


    public function password(){

              return View('users.password');
      }













}

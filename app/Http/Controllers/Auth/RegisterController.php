<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Roles;
use App\Area;
use App\State;
use App\Town;
use Carbon\Carbon;
use App\ActivationToken;
use Illuminate\Http\Request;
use App\Rules\ValidEmailDomain;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    // public function selectAjax(Request $request)
    // {
    // 	if($request->ajax()){
    // 		$towns = DB::table('towns')->where('state_id',$request->state_id)->pluck("name","id")->all();
    // 		$data = view('ajax-select',compact('towns'))->render();
    // 		return response()->json(['options'=>$data]);
    // 	}
    // }

   public function showRegistrationForm()
   {
     $areas = Area::all();
    //  $states = State::pluck('name','id');
     $states = State::all();

       return view('auth.register', compact('areas','states'));
   }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'apellidop' => 'required|string|max:255',
            'apellidom' => 'required|string|max:255',
            'area_id' => 'required',
            'genero' => 'required',
            'fechan' => 'required',
            'estado_id' => 'required',
            'ciudad_id' => 'required',
            // 'url' => 'required',
            'email' => ['required','string','email','max:255','unique:users',
            new ValidEmailDomain],
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellidop' => $data['apellidop'],
            'apellidom' => $data['apellidom'],
            'area_id' => $data['area_id'],
            'genero' => $data['genero'],
            'fechan' => Carbon::parse($data['fechan']),
            'estado_id' => $data['estado_id'],
            'ciudad_id' => $data['ciudad_id'],
            'url' => $data['url'],
            'email' => $data['email'],
            'password' => $data['password'],
        ])->generateToken();

    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();

        return redirect('login')->withInfo('Te hemos enviado un link de
        activación a tu correo');
    }
}

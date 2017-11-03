<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    //para agregar la clase auth

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','blog']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
         $users = User::all();
         $nusers = User::all()->count();
         $nposts = Post::all()->count();
         $npostsu = Auth::user()->posts->count();
        //  $descargas = Download::first()->clicks;
         $online = 0;
         if ($users){
           foreach ($users as $user)
           {
               if ($user->isOnline())
               {
                 $online = $online+1 ;
                }
           }
         }
          return view('home',compact(
            'users',
            'nusers',
             'nposts',
           'npostsu',
            'online'));
            // 'descargas'

    }

    public function index() {
        return view('index');
    }



}

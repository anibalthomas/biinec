<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class GaleriasController extends Controller
{



  public function galeria1()
  {
          $posts = Post::published()->paginate(6);
          // $posts = Post::published()->get();

          return view('galeria.galeria1', compact('posts'));
  }






}

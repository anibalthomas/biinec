<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        return view('galeria.galeria1', [
          // 'title' => "Publicaciones de la etiqueta '{$tag->name}'",
          'title' => "#$tag->name",
          'posts' => $tag->posts()->paginate(6)
        ]);
    }
}

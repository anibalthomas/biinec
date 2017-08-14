<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {

        return view('galeria.galeria1', [
            // 'title' => "Publicaciones de la categoria '{$category->name}'",
            'title' => $category->name,
            'posts' => $category->posts()->paginate(6)
        ]);
      }
}

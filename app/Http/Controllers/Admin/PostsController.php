<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use App\Area;
use App\Lugar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    // public function create()
    // {
    //
    //     $categories = Category::all();
    //     $tags = tag::all();
    //     return view('admin.posts.create', compact('categories', 'tags'));
    // }

        public function store(Request $request)
        {
          $this->validate($request, ['title' => 'required|min:3|unique:posts']);

          $post = Post::create($request->only('title'));

          return redirect()->route('admin.posts.edit', $post);
        }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $areas = Area::all();
        $lugares = Lugar::all();
        $tags = tag::all();
        return view('admin.posts.edit', compact('categories','areas','lugares', 'tags', 'post'));

    }



// public function store(Request $request) {         return $request->all();   }
public function update(Post $post, Request $request)
{
    $this->validate($request, [
      'title' => 'required',
      'ncientifico' => 'required',
      'area' => 'required',
      'lugar' => 'required',
      'ubicacion' => 'required',
      'category' => 'required',
      'excerpt' => 'required',
      'tags' => 'required'
    ]);
  $post->title = $request->get('title');
  $post->ncientifico = $request->get('ncientifico');
  $post->excerpt = $request->get('excerpt');
  $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
  $post->category_id = $request->get('category');
  $post->area_id = $request->get('area');
  $post->lugar_id = $request->get('lugar');
  $post->ubicacion = $request->get('ubicacion');
  $post->save();
  $post->tags()->sync($request->get('tags'));
  return redirect()->route('admin.posts.edit', $post)->with('info','La publicación ha sido guardada');
}

public function destroy(Post $post)
{

  $post->delete();

  return redirect()->route('admin.posts.index', $post)->with('info','La publicación ha sido eliminada');
}

}

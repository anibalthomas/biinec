<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use App\Area;
use App\Lugar;
use App\Author;
use Illuminate\Support\Facades\Auth;    //para agregar la clase auth
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        // if (auth()->user()->hasRoles(['admin']) ) {
        //   $posts = Post::all();
        // }
        // else {
          $posts = Auth::user()->posts;
          // $posts = Post::where('user_id', auth()->id())->get();
          // igual que arriba
        // }

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
          $this->validate($request, ['title' => 'required|min:3']);

          // $post = Post::create($request->only('title'));
          $post = Post::create([
            'title' => $request->get('title'),

            'ownername' => Auth::user()->name,
            'ownerapaterno' => Auth::user()->apellidop,
            'owneramaterno' => Auth::user()->apellidom,
            'ownerarea' => Auth::user()->area->name,
            'ownerestado' => Auth::user()->estado->name,
            'ownerciudad' => Auth::user()->ciudad->name,
            'ownercorreo' => Auth::user()->email,
            'ownerurl' => Auth::user()->url,

            'user_id' => auth()->id()
          ]);


          return redirect()->route('admin.posts.edit', $post);
        }

    public function edit(Post $post)
    {
       $this->authorize('view', $post);

        $categories = Category::all();
        $areas = Area::all();
        $lugares = Lugar::all();
        $tags = tag::all();
        return view('admin.posts.edit', compact('categories','areas','lugares', 'tags', 'post'));

    }



// public function store(Request $request) {         return $request->all();   }
public function update(Post $post, Request $request)
{
   $this->authorize('update', $post);
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

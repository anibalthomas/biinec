<?php

namespace App\Http\Controllers;

use App\Post;
use App\Download;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{
  public function show(Post $post)
  {
      return view('posts.show', compact('post'));
  }

  public function click()
  {
    $download = Download::first();
    $download->addclick();

//
// 'title' => "/storage/'{$post->photos->first()->url}'"
// 'title' => "#$tag->name",
    return redirect()->back();
  }
}

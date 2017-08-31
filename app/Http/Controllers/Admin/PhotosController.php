<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
          $this->validate(request(), [
            // 'photo' => 'image|max:2048'  tambien puede ser defino la dimencion con |dimensions:min_height
            'photo' => 'required|image'
          ]);




          Photo::create([
              'url' => request()->file('photo')->store('posts','public'),
              'post_id' => $post->id
          ]);
    }

    public function destroy(Photo $photo)
    {
       $photo->delete();

       $photoPath = str_replace('storage', 'public', $photo->url);

       Storage::delete($photoPath);


       return back()->with('info', 'Foto eliminada');
    }
}

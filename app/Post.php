<?php

namespace App;

use App\DatesTranslator;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        use DatesTranslator;

    protected $guarded = [];
    protected $dates = ['published_at'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($post){
            $post->tags()->detach();
            $post->photos->each->delete();
        });
    }


    public function getRouteKeyName()
    {
        return 'url';
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
      // 1 a muchos
    }
    public function area()
    {
      return $this->belongsTo(Area::class);
      // 1 a muchos
    }
    public function lugar()
    {
      return $this->belongsTo(Lugar::class);
      // 1 a muchos
    }

      public function tags()
      {
        return $this->belongsToMany(Tag::class);
        // muchos a muchos
      }

      public function photos()
      {
          return $this->hasMany(Photo::class);
      }

      public function scopePublished($query)
      {
        $query->whereNotNull('published_at')
                 ->where('published_at', '<=', Carbon::now() )
                 ->latest('published_at');
      }

      public static function create(array $attributes = [])
      {
        $post = static::query()->create($attributes);

        $post->generateUrl();

        return $post;
      }

      public function generateUrl()
      {
        $url = str_slug($this->title);

        if ($this->whereUrl($url)->exists()) {

          $url = "{$url}-{$this->id}";
        }

        $this->url = $url;

        $this->save();
      }

      // public function setTitleAttribute($title)
      // {
      //   $this->attributes['title'] = $title;
      //
      //   $url = str_slug($title);
      //   $duplicateUrlCount = Post::where('url', 'LIKE', "{$url}%")->count();
      //
      //   while (Post::where('url', $url)->exists()) {
      //     # code...
      //   }
      //
      //   $this->attributes['url'] = $url;
      // }



}

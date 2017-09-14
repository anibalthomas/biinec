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

      public function setTitleAttribute($title)
      {
        $this->attributes['title'] = $title;
        $this->attributes['url'] = str_slug($title);
      }



}

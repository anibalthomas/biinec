<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  // protected $table = 'states';
      protected $fillable = ['name'];
  // public function town()
  // {
  //     return $this->hasOne(State::class);
  //     // 1 a muchos
  // }
}

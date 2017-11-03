<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
  public function addclick()  {

// assume you have a clicks  field in your DB

$this->clicks = $this->clicks + 1;
$this->save();

}
}

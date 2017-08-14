<?php

use Illuminate\Database\Seeder;
use App\Lugar;

class LugaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Lugar::truncate();

          $lugar = new Lugar;
          $lugar->name = "Lugar 1";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Lugar 2";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Lugar 3";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Lugar 4";
          $lugar->save();

    }
}

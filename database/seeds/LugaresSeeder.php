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
          $lugar->name = "Jardín Botánico Clavijero";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Santuario del Bosque de Niebla";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "CAMPUS I";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "CAMPUS II";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "CAMPUS III Clúster BioMimic®";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Centro Regional del Bajío";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Centro de Investigaciones Costeras (CICOLMA)";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Laboratorio del Desierto Mapimi";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Piedra Herrada, La Michilia";
          $lugar->save();

    }
}

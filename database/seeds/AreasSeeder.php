<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::truncate();

        $area = new Area;
        $area->name = "Red de Ambiente y Sustentabilidad";
        $area->save();

        $area = new Area;
        $area->name = "Red de Biología y Conservación de Vertebrados";
        $area->save();

        $area = new Area;
        $area->name = "Red de Biología Evolutiva";
        $area->save();

        $area = new Area;
        $area->name = "Red de Biodiversidad y Sistemática";
        $area->save();

        $area = new Area;
        $area->name = "Red de Ecología Funcional";
        $area->save();

        $area = new Area;
        $area->name = "Red de Ecoetología";
        $area->save();

        $area = new Area;
        $area->name = "Red de Estudios Moleculares Avanzados";
        $area->save();

        $area = new Area;
        $area->name = "Red de Interacciones Multitróficas";
        $area->save();

        $area = new Area;
        $area->name = "Red de Manejo Biorracional de Plagas y Vectores";
        $area->save();

        $area = new Area;
        $area->name = "Red de Manejo Biotecnológico de Recursos";
        $area->save();

        $area = new Area;
        $area->name = "Jardín Botánico Clavijero";
        $area->save();

        $area = new Area;
        $area->name = "Oficina de Enlace con la Sociedad";
        $area->save();

        $area = new Area;
        $area->name = "Posgrado INECOL";
        $area->save();

        $area = new Area;
        $area->name = "USPAE (Unidad de Servicios Profesionales Altamente Especializados)";
        $area->save();


    }
}

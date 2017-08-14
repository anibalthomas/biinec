<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::truncate();

// REDES ACADEMICAS

      $category = new Category;
      $category->name = "AMBIENTE Y SUSTENTABILIDAD";
      $category->save();

      $category = new Category;
      $category->name = "BIOLOGÍA EVOLUTIVA";
      $category->save();

      $category = new Category;
      $category->name = "BIOLOGÍA Y CONSERVACÍON DE VERTEBRADOS";
      $category->save();

      $category = new Category;
      $category->name = "BIODIVERSIDAD Y SISTÉMATICAS";
      $category->save();

      $category = new Category;
      $category->name = "ECOETOLOGÍA";
      $category->save();

      $category = new Category;
      $category->name = "ECOLOGÍA FUNCIONAL";
      $category->save();

      $category = new Category;
      $category->name = "ESTUDIOS MOLECULARES AVANZADOS";
      $category->save();

      $category = new Category;
      $category->name = "INTERACCIONES MULTITRÓFICAS";
      $category->save();

      $category = new Category;
      $category->name = "MANEJO BIOTECNOLÓGICO DE RECURSOS";
      $category->save();

      $category = new Category;
      $category->name = "MANEJO BIORRACIONAL DE PLAGAS Y VECTORES";
      $category->save();

// INSTALACIONES DEL INECOL

      $category = new Category;
      $category->name = "JARDÍN BOTÁNICO";
      $category->save();

      $category = new Category;
      $category->name = "SANTUARIO DEL BOSQUE DE NIEBLA";
      $category->save();

      $category = new Category;
      $category->name = "POSGRADO INECOL";
      $category->save();

      $category = new Category;
      $category->name = "USPAE";
      $category->save();

      $category = new Category;
      $category->name = "CENTRO REGIONAL PÁTZCUARO";
      $category->save();

      $category = new Category;
      $category->name = "CICOLMA";
      $category->save();

      $category = new Category;
      $category->name = "LABORATORIO DEL DESIERTO MAPIMÍ";
      $category->save();

      $category = new Category;
      $category->name = "ESTACIÓN DE TRABAJO PIEDRA HERRADA";
      $category->save();
      $category = new Category;
      $category->name = "SEDE XALAPA";
      $category->save();

      $category = new Category;
      $category->name = "ADMINISTRACIÓN";
      $category->save();

      $category = new Category;
      $category->name = "CLÚSTER CIENTÍFICO Y TECNOLÓGICO BIOMIMIC®";
      $category->save();

      $category = new Category;
      $category->name = "CENTRO DE RECLUTAMIENTO DE NUEVOS TALENTOS DE LA CIENCIA";
      $category->save();

// EVENTOS

      $category = new Category;
      $category->name = "FESTIVAL DE AVES Y HUMEDALES";
      $category->save();

      $category = new Category;
      $category->name = "CARRERA VERDE";
      $category->save();

      $category = new Category;
      $category->name = "CASA ABIERTA";
      $category->save();

      $category = new Category;
      $category->name = "FOMENTO A LA CARRERA CIENTÍFICA";
      $category->save();

    }
}

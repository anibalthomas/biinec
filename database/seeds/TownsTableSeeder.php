<?php

use App\Town;
use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('towns')->delete();
          $town1 = [
            'Xalapa',
            'Acula',
            'Acayucan',
            'Actopan',
            'Coatepec',
          ];
          $town2 = [
            'El Camarón',
            'Chahuites',
            'Cosolapa',
            'El Rosario',
            'Lagunas',
          ];
          foreach ($town1 as $key => $value) {
            $town = new town();
            $town->name = $value;
            $town->state_id = 1;
            $town->save();
          }
          foreach ($town2 as $key => $value) {
            $town = new town();
            $town->name = $value;
            $town->state_id = 2;
            $town->save();
          }
    }
}

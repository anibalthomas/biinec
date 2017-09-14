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
            'Ciudad 1 - Estado 1',
            'Ciudad 2 - Estado 1',
            'Ciudad 3 - Estado 1',
            'Ciudad 4 - Estado 1',
            'Ciudad 5 - Estado 1',
          ];
          $town2 = [
            'Ciudad 1 - Estado 2',
            'Ciudad 2 - Estado 2',
            'Ciudad 3 - Estado 2',
            'Ciudad 4 - Estado 2',
            'Ciudad 5 - Estado 2',
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

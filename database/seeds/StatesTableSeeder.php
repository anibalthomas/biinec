<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $DataCountries = ['Estado 1','Estado 2'];
        foreach ($DataCountries as $key => $value) {
            $States = new state();
            $States->name = $value;
            $States->save();
}
    }
}

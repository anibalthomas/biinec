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
        $area->name = "Area 1";
        $area->save();

        $area = new Area;
        $area->name = "Area 2";
        $area->save();

        $area = new Area;
        $area->name = "Area 3";
        $area->save();

        $area = new Area;
        $area->name = "Area 4";
        $area->save();
    }
}

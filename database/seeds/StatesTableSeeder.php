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
        $DataCountries = [
'Aguascalientes'
,'Baja California'
,'Baja California Sur'
,'Campeche'
,'Chiapas'
,'Chihuahua'
,'Coahuila'
,'Colima'
,'CDMX'
,'Durango'
,'Estado de México'
,'Guanajuato'
,'Guerrero'
,'Hidalgo'
,'Jalisco'
,'MichoacАn'
,'Morelos'
,'Nayarit'
,'Nuevo León'
,'Oaxaca'
,'Puebla'
,'Querétaro'
,'Quintana Roo'
,'San Luis Potosí'
,'Sinaloa'
,'Sonora'
,'Tabasco'
,'Tamaulipas'
,'Tlaxcala'
,'Veracruz'
,'Yucatán'
,'Zacatecas'];
        foreach ($DataCountries as $key => $value) {
            $States = new state();
            $States->name = $value;
            $States->save();
}
    }
}

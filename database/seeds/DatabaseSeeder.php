<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        $this->call(CategoriasSeeder::class);
        $this->call(LugaresSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TownsTableSeeder::class);
              // $this->call(AssignedRolesTableSeeder::class);
    }
}

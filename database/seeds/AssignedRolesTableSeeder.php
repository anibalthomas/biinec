<?php

use Illuminate\Database\Seeder;

class AssignedRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::truncate();
      Role::create([
        'user_id' => '1',
        'role_id' => '1',
      ]);
      Role::create([
        'user_id' => '2',
        'role_id' => '2',
      ]);
    }
}

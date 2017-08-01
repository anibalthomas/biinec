<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      DB::table('users')->insert([
        'name' => 'Anibal',
        'email' => 'jovomilla@gmail.com',
        'password' => bcrypt('123456'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('users')->insert([
        'name' => 'Tomas',
        'email' => 'tomas@gmail.com',
        'password' => bcrypt('123456'),
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      factory(App\User::class, 30)->create();


          // factory(App\User::class)->create([
          //   'name' => 'Anibal',
          //   'email' => 'jovomilla@gmail.com',
          //   // 'role_id' => '1',
          //   'password' => bcrypt('123456'),
          //
          // ]);
          // factory(App\User::class)->create([
          //   'name' => 'Tomás',
          //   'email' => 'tomas@gmail.com',
          //   // 'role_id' => '2',
          //   'password' => bcrypt('123456'),
          //
          // ]);






    }
}

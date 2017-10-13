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
      DB::table('assigned_roles')->truncate();
      $user = new User;
      $user->name = "Anibal";
      $user->apellidop = "Sánchez";
      $user->apellidom = "Mújica";
      $user->genero = "1";
      $user->email = "jovomilla@gmail.com";
      $user->area_id = "1";
      $user->fechan = "2017-09-13 00:00:00";
      $user->estado_id = "1";
      $user->ciudad_id = "1";
      $user->url = "www.dooded.com";
      $user->avatar = "avatars/anibal.jpeg";
      $user->password = "123456";
      $user->created_at = Carbon::now()->format('Y-m-d H:i:s');
      $user->active = true;
      $user->save();

      DB::table('assigned_roles')->truncate();
      $user = new User;
      $user->name = "Tomas";
      $user->apellidop = "Sánchez";
      $user->apellidom = "Mújica";
      $user->genero = "1";
      $user->email = "tomas@gmail.com";
      $user->area_id = "1";
      $user->fechan = "2017-09-13 00:00:00";
      $user->estado_id = "2";
      $user->ciudad_id = "2";
      $user->url = "www.tomas.com";
      $user->avatar = "avatars/default.png";
      $user->password = "123456";
      $user->created_at = Carbon::now()->format('Y-m-d H:i:s');
      $user->active = true;
      $user->save();


      DB::table('assigned_roles')->insert([
            'id' => '1',
            'user_id' => '1',
            'role_id' => '1',
      ]);

      DB::table('assigned_roles')->insert([
            'id' => '2',
            'user_id' => '2',
            'role_id' => '1',
      ]);

      // DB::table('users')->insert([
      //   'name' => 'Anibal',
      //   'email' => 'jovomilla@gmail.com',
      //   'password' => bcrypt('123456'),
      //   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      // ]);
      //
      // DB::table('users')->insert([
      //   'name' => 'Tomas',
      //   'email' => 'tomas@gmail.com',
      //   'password' => bcrypt('123456'),
      // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      // ]);
      //


      factory(App\User::class, 30)->create();








    }
}

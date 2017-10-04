<?php

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
      DB::table('users')->insert([
                  ['name' => 'Eevee',
                  'email' => 'eevee@gmail.com',
                  'password' => bcrypt('secret')], 
                  ['name' => 'Hope',
                  'email' => 'hope@gmail.com',
                  'password' => bcrypt('extrasecret')]
              ]);
    }
}
<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->insert(array(
        'username' => 'SuperAdmin',
        'password' => \Hash::make('superadmin'),
        'tipe' => '1'
      ));
    }
}

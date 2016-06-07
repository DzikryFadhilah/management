<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          'rolename'  => 'superadmin'
        ]);

        DB::table('roles')->insert([
          'rolename'  => 'hrd'
        ]);

        DB::table('roles')->insert([
          'rolename'  => 'teknisi'
        ]);

        DB::table('roles')->insert([
          'rolename'  => 'akunting'
        ]);
    }
}

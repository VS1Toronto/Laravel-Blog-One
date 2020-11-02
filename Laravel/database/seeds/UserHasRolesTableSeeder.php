<?php

use Illuminate\Database\Seeder;
use App\UserHasRole;

class UserHasRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       Eloquent::unguard();

       //disable foreign key check for this connection before running seeders
       DB::statement('SET FOREIGN_KEY_CHECKS=0;');

       //$this->call(StoresTableSeeder::class);
       DB::table('user_has_roles')->delete();

       // Create manager role
       DB::table('user_has_roles')->insert([
         'role_id' => '1',
         'user_id' => '1'
       ]);


       // supposed to only apply to a single connection and reset it's self
       // but I like to explicitly undo what I've done for clarity
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');
     }
}

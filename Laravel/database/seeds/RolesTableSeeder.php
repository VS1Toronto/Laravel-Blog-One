<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
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
      DB::table('roles')->delete();

      // Create manager role
      DB::table('roles')->insert([
        'name' => 'manager'
      ]);

      // Create member role
      DB::table('roles')->insert([
        'name' => 'member'
      ]);


      // supposed to only apply to a single connection and reset it's self
      // but I like to explicitly undo what I've done for clarity
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

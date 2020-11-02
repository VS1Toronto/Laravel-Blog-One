<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->delete();

        //$this->call(UsersTableSeeder::class);
        DB::table('users')->insert([

          [
             'name' => 'Lee Davidson',
             'email' => 'VS1Toronto@hotmail.com',
             'password' => bcrypt('Reclar32'),
             'created_at'	=> new DateTime,
             'updated_at'	=> new DateTime,
          ],
          [
             'name' => 'Nathan',
             'email' => str_random(12).'@email.com',
             'password' => bcrypt('password'),
             'created_at'	=> new DateTime,
             'updated_at'	=> new DateTime,
          ],
          [
            'name' => 'David',
            'email' => str_random(12).'@email.com',
            'password' => bcrypt('password'),
            'created_at'	=> new DateTime,
            'updated_at'	=> new DateTime,
          ],
          [
            'name' => 'Lisa',
            'email' => str_random(12).'@email.com',
            'password' => bcrypt('password'),
            'created_at'	=> new DateTime,
            'updated_at'	=> new DateTime,
          ],

        ]);


        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

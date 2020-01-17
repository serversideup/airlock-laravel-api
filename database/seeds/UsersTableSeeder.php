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
            'name' => 'Dan',
            'email' => 'dan@521dimensions.com',
            'password' => bcrypt('Pa$$word1'),
        ]);
    }
}

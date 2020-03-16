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
            'username' => 'seppe_playboy',
            'email' => 'player69@gmail.com',
            'admin' => false,
            'password' => "mijngeheimwachtwoordREDACTED",
        ]);
        DB::table('users')->insert([
            'username' => 'aadil_vdb',
            'email' => 'mocro_killer@hotmail.be',
            'admin' => false,
            'password' => "mijngeheimwachtwoordREDACTED",
        ]);
        DB::table('users')->insert([
            'username' => 'saleem_willy',
            'email' => 'rocketeer@antwerp.be',
            'admin' => true,
            'password' => "mijngeheimwachtwoordREDACTED",
        ]);
    }
}

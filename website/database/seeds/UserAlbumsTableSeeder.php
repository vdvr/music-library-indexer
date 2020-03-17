<?php

use Illuminate\Database\Seeder;

class UserAlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userAlbums')->insert([
            'albumId' => 1,
            'username' => 'seppe_playboy',
        ]);
        DB::table('userAlbums')->insert([
            'albumId' => 2,
            'username' => 'seppe_playboy',
        ]);
        DB::table('userAlbums')->insert([
            'albumId' => 1,
            'username' => 'saleem_willy',
        ]);
    }
}

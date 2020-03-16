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
        DB::table('user_albums')->insert([
            'album_id' => 1,
            'username' => 'seppe_playboy',
        ]);
        DB::table('user_albums')->insert([
            'album_id' => 2,
            'username' => 'seppe_playboy',
        ]);
        DB::table('user_albums')->insert([
            'album_id' => 3,
            'username' => 'saleem_willy',
        ]);
    }
}

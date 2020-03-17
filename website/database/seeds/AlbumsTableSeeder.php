<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'title' => 'Moody Blue',
            'artist' => 'Elvis Presley',
            'format' => 'LP',
            'producer' => "dummyProducerMoodyBlue",
            'releaseYear' => '1973',
        ]);
        DB::table('albums')->insert([
            'title' => 'Thriller',
            'artist' => 'Michael Jackson',
            'format' => 'S',
            'producer' => "dummyProducerThriller",
            'releaseYear' => '1993',
        ]);
        DB::table('albums')->insert([
            'title' => 'At Folsom Prison',
            'artist' => 'Johnny Cash',
            'format' => 'LP',
            'producer' => "dummyProducerAtFolsomPrison",
            'releaseYear' => '1963',
        ]);
    }

}

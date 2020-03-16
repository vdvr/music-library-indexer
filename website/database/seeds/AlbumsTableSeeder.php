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
            'producer' => "dummyProducerMoodyBlue",
            'releasedate' => '1973',
            'catnum' => 'RCA-1702'
        ]);
        DB::table('albums')->insert([
            'title' => 'Thriller',
            'artist' => 'Michael Jackson',
            'producer' => "dummyProducerThriller",
            'releasedate' => '1993',
            'catnum' => 'RCA-2002'
        ]);
        DB::table('albums')->insert([
            'title' => 'At Folsom Prison',
            'artist' => 'Johnny Cash',
            'producer' => "dummyProducerAtFolsomPrison",
            'releasedate' => '1963',
            'catnum' => 'RCA-2'
        ]);
    }

}

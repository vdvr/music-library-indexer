<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    private $aMoodyBlueSongs = array("Unchained Melody", "If You Love Me (Let Me Know)", "Little Darlin'", 
        "He'll Have to Go", "Let Me Be There", "Way Down", "Pledging My Love", "Moody Blue", 
        "She Thinks I Still Care", "It's Easy for You");
    private $aBeatItSongs = array("Beat It", "Get On The Floor");
    private $aAtFolsomPrison = array("Folsom Prison Blues", "Dark as the Dungeon", "I Still Miss Someone", 
        "Cocaine Blues", "25 Minutes to Go", "Orange Blossom Special", "The Long Black Veil", "Send a Picture of Mother", 
        "The Wall", "Dirty Old Egg-Suckin' Dog", "Flushed From the Bathroom of Your Heart", "Jackson", 
        "Give My Love to Rose", "I Got Stripes", "Green, Green Grass of Home", "Greystone Chapel");
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->aMoodyBlueSongs as $i => $songName) {
            DB::table('songs')->insert([
                'albumId' => 1,
                'nr' => $i + 1,
                'name' => $songName,
            ]);
        }
        
        foreach ($this->aBeatItSongs as $i => $songName) {
            DB::table('songs')->insert([
                'albumId' => 2,
                'nr' => $i + 1,
                'name' => $songName,
            ]);
        }
        
        foreach ($this->aAtFolsomPrison as $i => $songName) {
            DB::table('songs')->insert([
                'albumId' => 3,
                'nr' => $i + 1,
                'name' => $songName,
            ]);
        }
    }
}

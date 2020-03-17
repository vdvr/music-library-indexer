<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepository;

class LibraryController extends Controller
{
    /**
     * 
     * @var AlbumRepository
     */
    private $albumRepo;
    
    /**
     * LibraryController Constructor
     * 
     * @param AlbumRepository $albumRepo
     */
    public function __construct(AlbumRepository $albumRepo) {
        $this->albumRepo = $albumRepo;
    }
    
    public function showPublicLibrary() {
        
    }
    
    public function showPersonalLibrary() {
        $thisExampleUser = 'seppe_playboy'; // with auth
        
        return view('library', ['user' => $thisExampleUser, 'albums' => $this->albumRepo->getSavedAlbumsByUsername($thisExampleUser)]);
    }
    
    public function showOtherLibrary() {
        
    }
    
    private function authenticate() {
        
    }
}
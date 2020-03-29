<?php

namespace App\Http\Controllers;

use Auth;
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
        $this->middleware('auth');
    }

    public function showPublicLibrary() {

    }

    public function showPersonalLibrary() {
        $thisExampleUser = Auth::user()->username;
        $aSavedAlbums = $this->albumRepo->getSavedAlbumsByUsername($thisExampleUser);
        $aSongs = array();
        foreach ($aSavedAlbums as $key => $value) {
            $aSongs[$value->id] = $this->albumRepo->getSongs($value->id);
        }
        $vParams = view('library', ['user' => $thisExampleUser,
            'albums' => $aSavedAlbums,
            'songs' => $aSongs
        ]);
        return $vParams;

    }

    public function showOtherLibrary() {

    }

    private function authenticate() {

    }
}

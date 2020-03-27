<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\AlbumRepository;
use App\Models\Album;
use App\Models\UserAlbum;
use App\Models\Song;


/**
 * Description of EloquentAlbum
 *
 * @author Luca
 */
class EloquentAlbum implements AlbumRepository {
    /**
     *
     * @var Album
     */
    private $albumModel;
    /**
     *
     * @var UserAlbum
     */
    private $userAlbumModel;
    /**
     *
     * @var Song
     */
    private $songModel;
    
    public function __construct(Album $albumModel, UserAlbum $userAlbumModel, Song $songModel) {
        $this->albumModel = $albumModel;
        $this->userAlbumModel = $userAlbumModel;
        $this->songModel = $songModel;
    }
    
    public function getSavedAlbumsByUsername($askingUsername, $requestedUsername = null) {
        // getting all albums to show
        if (!is_null($requestedUsername)) { // albums of requested user
            $allRequested = $this->getAlbumsByUsername($requestedUsername);
        }
        else { // all albums
            $allRequested = $this->albumModel->all();
        }
        
        // get all ids of albums of asking user
        $allAskingIds = $this->getAlbumsByUsername($askingUsername)->value('albumId');
        
        /*
        $reply = array('present' => array(), 'absent' => array());
        foreach ($allRequested as $album) {
            $id = $album['id'];
            $result = $this->albumModel->where('id', $id)->where('username', $askingUsername)->get();
            if (is_null($result)) {
                $reply['absent'][] = $album;
            }
            else {
                $reply['present'][] = $album;
            }
        }
        */
        
        $allPresent = $allRequested
                ->where('id', 1)
                ->get();
        $allAbsent = $allRequested
                ->where('id', '!=', 2)
                ->get();
        
        return array('present' => $allSaved->where('asking'), 'absent');
    }
    
    private function getAlbumsByUsername($username) {
        return UserAlbum::with('albums')
                    ->where('username', $username);
    }
    
    public function getAlbumDetails($albumId) {
        return $this->albumModel->where('id', $albumId)->first();
    }
    
    public function getAlbumPersonalDetails($albumId, $username) {
        return $this->userAlbumModel->where('albumId', $albumId)->where('username', $username)->first();
    }
    
    public function getSongs($albumId) {
        return $this->songModel->where('albumId', $albumId)->get();
    }
    
    public function updateAlbumPersonalDetails($albumId, $username, $aChanges) {
        try {
            $toChange = $this->userAlbumModel
                    ->where('albumid', $albumId)
                    ->where('username', $username)
                    ->firstOrFail();
            
            if (isset($aChanges['rating'])) {
                $toChange->rating = $aChanges['rating'];
            }
            if (isset($aChanges['catNr'])) {
                $toChange->catNr = $aChanges['catNr'];
            }
            $toChange->save();

            return true; 
        } catch (Exception $ex) {
            return false;
        }
    }
}

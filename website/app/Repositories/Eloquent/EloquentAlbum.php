<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\AlbumRepository;
use App\Models\Album;
use App\Models\UserAlbum;


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
    
    public function __construct(Album $albumModel, UserAlbum $userAlbumModel) {
        $this->albumModel = $albumModel;
        $this->userAlbumModel = $userAlbumModel;
    }
    
    public function getSavedAlbumsByUsername($askingUsername, $requestedUsername = null) {
        if (is_null($requestedUsername)) {
            $allRequested = $this->albumModel
                    ->where('username', $requestedUsername)->get();
        } else {
            $allRequested = $this->albumModel->all();
        }
        
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
        
        $allPresent = $this->albumModel->where('id', $allRequested->id)->where('username', $askingUsername)->get();
        return array('present' => $allSaved->where('asking'), 'absent');
    }
    
    public function getSongs($albumId) {
        return $this->songModel->where('albumId', $albumId)->get();
    }
    
    public function getAlbumDetails($albumId, $username = null) {
        $result = array();
        
        if (!is_null($username)) {
            $reply['personal'] = $this->userAlbumModel->where('username', $username)->get();
        }
        
        $reply['public'] = $this->albumModel->where('id', $albumId)->get();
        
        return $reply;
    }
}

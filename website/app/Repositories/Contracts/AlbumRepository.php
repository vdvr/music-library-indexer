<?php

namespace App\Repositories\Contracts;

/**
 *
 * @author Luca
 */
interface AlbumRepository {
    
    public function getSavedAlbumsByUsername($askingUsername, $requestedUsername = null);
    public function getAlbumDetails($albumId);
    public function getAlbumPersonalDetails($albumId, $username);
    public function getSongs($albumId);
    public function updateAlbumPersonalDetails($albumId, $username, $aChanges);
}

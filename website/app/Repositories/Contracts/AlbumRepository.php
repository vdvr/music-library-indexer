<?php

/**
 *
 * @author Luca
 */
interface AlbumRepository {
    
    public function getSavedAlbumsByUsername($askingUsername, $requestedUsername = null);
    
    public function getSongs($albumId);
    
    public function getAlbumDetails($albumId, $username = null);
}

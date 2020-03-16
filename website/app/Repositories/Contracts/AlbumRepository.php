<?php

/**
 *
 * @author Luca
 */
interface AlbumRepository {
    public function getAllAlbums();
    
    public function getAllAlbumsByUsername($username);
    
    public function getSavedAlbumsByUsername($username);
}

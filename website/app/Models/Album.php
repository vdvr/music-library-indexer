<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserAlbum;

class Album extends Model
{
    protected $table = 'albums';
    protected $primaryKey = 'id';
    
    function userAlbums() {
        return $this->hasMany('App\Models\UserAlbum', 'albumId', 'id');
    }
}

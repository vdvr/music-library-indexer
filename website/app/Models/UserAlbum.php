<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAlbum extends Model
{
    protected $table = 'userAlbums';
    protected $primaryKey = ['albumId', 'username'];

    function albums() {
        return $this->hasMany('Album', 'id', 'albumId');
    }
    
    function users() {
        return $this->hasMany('Users', 'username');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAlbum extends Model
{
    protected $table = 'userAlbums';
    protected $primaryKey = ['albumId', 'username'];

    function albums() {
        return $this->belongsTo('App\Models\Album', 'albumId', 'id');
    }
    
    function users() {
        return $this->belongsTo('App\Models\User', 'username');
    }
}

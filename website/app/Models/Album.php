<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $primaryKey = 'id';
    
    function userAlbum() {
        return $this->belongsTo('UserAlbum', 'albumId');
    }
}

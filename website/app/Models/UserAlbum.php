<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class UserAlbum extends Model
{
    protected $table = 'userAlbums';
    protected $primaryKey = ['albumId', 'username'];
    public $incrementing = false;
    public $timestamps = false;

    function albums() {
        return $this->belongsTo('App\Models\Album', 'albumId', 'id');
    }
    
    function users() {
        return $this->belongsTo('App\Models\User', 'username');
    }
    
    use Helpers\HasCompositePrimaryKey;
}

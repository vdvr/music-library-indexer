<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'songs';
    protected $primaryKey = ['albumId', 'nr'];
    
    function albums() {
        return $this->belongsTo('Album', 'id', 'albumId');
    }
}

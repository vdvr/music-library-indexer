<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Song extends Model
{
    protected $table = 'songs';
    protected $primaryKey = ['albumId', 'nr'];
    public $incrementing = false;
    public $timestamps = false;
    
    function albums() {
        return $this->belongsTo('App\Models\Album', 'id', 'albumId');
    }
    
    protected function setKeysForSaveQuery(Builder $query)
    {
        return $query->where('albumId', $this->getAttribute('albumId'))
            ->where('nr', $this->getAttribute('nr'));
    }
    
    use Helpers\HasCompositePrimaryKey;
}

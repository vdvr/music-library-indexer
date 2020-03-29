<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    protected $table = 'tokens';
    protected $primaryKey ='token';
    public $incrementing = true;
}

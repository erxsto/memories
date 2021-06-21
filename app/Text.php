<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = "texts";
    protected $primaryKey = "id";
    protected $fillable = [
        'titulo',
        'desc',
        'user_id'
    ];
}

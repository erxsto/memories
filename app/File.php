<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $fillable = ['url', 'user_id'];

    //Relacion uno a muchos inverso
    public function user(){
        return $this->belongsTo('App\User');
    }
}

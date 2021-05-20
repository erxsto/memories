<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $fillable = ['url', 'id_usuario'];

    //Relacion uno a muchos inverso
    public function user(){
        return $this->belongsTo('App\UsuariosModel');
    }
}

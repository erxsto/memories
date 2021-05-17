<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $fillable = ['url', 'id_usuario'];

    //Relacion uno a muchos inverso
    public function usuario(){
        return $this->belongsTo('App\UsuariosModel');
    }
}

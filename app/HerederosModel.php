<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HerederosModel extends Model
{
    protected $table = "destinatarios";
    protected $primaryKey = "id_destinatario";
    protected $fillable = ['user_id','nombre','app','apm','correo','telefono','contrasena'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $fillable = ['url', 'user_id', 'id_destinatario','iof','nombre'];

    //Relacion uno a muchos inverso
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function scopeFile($query, $id)
    {
        if ($id != "") {
            $query->where(\DB::raw('id'), $id);
        }
    }
    public function scopeDestinatario($query, $id_destinatario)
    {
        if ($id_destinatario != "") {
            $query->where(\DB::raw('id_destinatario'), $id_destinatario);
        }
    }
    public function scopeNombre($query, $nombre)
    {
        if ($nombre != "") {
            $query->where(\DB::raw('nombre'), $nombre);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuenta extends Authenticable
{
    use HasFactory,SoftDeletes;

    protected $table = 'cuentas';
    protected $primaryKey = 'perfil_id';

    public function perfil(){
        return $this->belongsTo('App\Models\Perfil');
    }

    public function imagenes(){
        return $this->hasMany('App\Models\Imagen');
    }

}

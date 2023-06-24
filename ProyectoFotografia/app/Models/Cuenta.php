<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Cuenta extends Authenticable
{
    use HasFactory;

    protected $table = 'cuentas';

    public function perfil(){
        return $this->belongsTo('App\Models\Perfil');
    }
}

<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    public function relTurmas(){
        return $this->hasMany('App\Models\Models\Turmas', 'criador');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $table = 'turmas';
    protected $fillable = ['nome', 'descricao', 'criador', 'convite'];
    public $timestamps = false;

    public function relUsuario(){
        return $this->hasOne('App\Models\Usuarios', 'id', 'criador');
    }
}

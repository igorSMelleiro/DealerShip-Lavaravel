<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [ 'marca', 'modelo', 'ano', 'placa', 'valor', 'imagem' ];
    //protected $guarded  = [ 'id' ];
}

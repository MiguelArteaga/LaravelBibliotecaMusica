<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artistas extends Model
{
    protected $table = 'artistas';
    protected $fillable =  ['Nombre','Apellidos','Genero','created_at','updated_at'];
}

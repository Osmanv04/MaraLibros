<?php

namespace MaraLibros;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $fillable = ['usuario','clave','email'];



}

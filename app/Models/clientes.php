<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'idcliente';
    protected $fillable = ['idcliente', 'nombre', 'app', 'apm', 'sexo', 'telefono', 'municipio', 'calle', 'nocalle'];
}

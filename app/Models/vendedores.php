<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vendedores extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'idvendedor';
    protected $fillable = ['idvendedor', 'nombre', 'app', 'apm', 'fechanac', 'sexo', 'email', 'contra', 'idcargo'];
}

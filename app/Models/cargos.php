<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargos extends Model
{
    use HasFactory;
    protected $primariKey = 'idcargo';
    protected $fillable = ['idcargo', 'cargo']; 
}

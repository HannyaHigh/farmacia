<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmaceuticos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'codigo', 'fecha_llegada', 'fecha_caducidad', 'cantidad', 'tipo_producto', 'precio', 'descripcion', 'img'];
}

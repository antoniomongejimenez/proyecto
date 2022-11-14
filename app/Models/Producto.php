<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function deporte()
    {
        return $this->belongsTo(Deporte::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function tipos_persona()
    {
        return $this->belongsTo(Tipos_persona::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function lineas()
    {
        return $this->hasMany(Linea_carrito::class);
    }

    public function megustas()
    {
        return $this->hasMany(Me_gusta::class);
    }

    public function tallas()
    {
        return $this->belongsToMany(Talla::class);
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }
}

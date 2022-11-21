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

    public function tiposPersona()
    {
        return $this->belongsTo(TiposPersona::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function lineas()
    {
        return $this->hasMany(LineaCarrito::class);
    }

    public function megustas()
    {
        return $this->hasMany(MeGusta::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function valoraciones()
    {
        return $this->hasMany(Valoracion::class);
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

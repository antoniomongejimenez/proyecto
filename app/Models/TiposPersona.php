<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposPersona extends Model
{
    use HasFactory;

    protected $fillable = [
        'denominación',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
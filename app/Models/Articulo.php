<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    public function monografias()
    {
        return $this->belongsToMany(Monografia::class);
    }

    public function autores()
    {
        return $this->belongsToMany(Autor::class);
    }
}

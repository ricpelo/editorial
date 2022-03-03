<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{
    use HasFactory;

    public function articulos()
    {
        return $this->belongsToMany(Articulo::class);
    }

    public function autores()
    {
        $autores = collect();

        foreach ($this->articulos as $articulo) {
            foreach ($articulo->autores as $autor) {
                $autores->push($autor);
            }
        }

        return $autores->unique(function ($elem) {
            return $elem->id;
        });
    }
}

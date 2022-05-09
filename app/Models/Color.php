<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function products() //relacion muchos a muchos (inversa), desde color a productos
    {
        return $this->belongsToMany(Product::class);
    }

    public function sizes() //relacion muchos a muchos (inversa), desde color a talla
    {
        return $this->belongsToMany(Size::class);
    }
}

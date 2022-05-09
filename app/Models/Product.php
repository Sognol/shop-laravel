<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function brand() //relacion uno a muchos inversa, desde productos a marcas
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory() //relacion uno a muchos inversa, desde productos a subcategorias
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function colors() //relacion muchos a muchos, desde productos a colores 
    {
        return $this->belongsTo(Color::class);
    }

    public function sizes() //relacion uno a muchos, desde productos a talla
    {
        return $this->hasMany(Size::class);
    }

    public function images() //relacion uno a muchos polimorfica
    {
        return $this->morphMany(Image::class, "Imageable");
    }
}

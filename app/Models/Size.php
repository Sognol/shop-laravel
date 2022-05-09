<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'product_id'];


    public function product() //relacion uno a muchos (inversa), desde tallas a productos 
    {
        return $this->belongsTo(Product::class);
    }

    public function colors() //relacion muchos a muchos (inversa), desde tallas a colores
    {
        return $this->belongsToMany(Color::class);
    }
}

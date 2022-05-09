<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function products() //relacion uno a muchos, una subcategoria puede tener muchos productos
    {
        return $this->hasMany(Product::class);
    }

    public function category() //relacion uno a muchos (inversa), entre subcategorias y categorias
    {
        return $this->belongsTo(Category::class);
    }
}

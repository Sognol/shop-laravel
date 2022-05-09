<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'icon'];


    public function subcategories()
    {
        return $this->hasMany(Subcategory::class); //relacion uno a muchos, una categoria puede tener varias subcategorias
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class); //relacion muchos a muchos entre categorias y marca
    }

    public function products() //relacion a traves de otra relacion
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //asignación masiva
    protected $fillable = ["name", "slug", "image", "icon"];

    //relacion de uno a muchos
    /* public function subCategory(){
        return $this->hasMany(Category::class);
    } */
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //relacion de muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }    

    //relacion de productos
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

}

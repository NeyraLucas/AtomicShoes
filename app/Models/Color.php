<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //relacion muchos a muchos
    public function products(){
        return $this->belongToMany(Product::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }

}
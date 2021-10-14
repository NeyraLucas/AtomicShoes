<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category){
        //categories = name de la carpeta; show=name de la vista
        return view('categories.show', compact('category'));
    }
}

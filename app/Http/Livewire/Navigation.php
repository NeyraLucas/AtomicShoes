<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all();//traemos todos los datos de categorias
        return view('livewire.navigation', compact('categories'));
    }
}

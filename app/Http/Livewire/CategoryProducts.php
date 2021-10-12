<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;

    public $products = [];

    public function loadPosts()
    {
        $this->products = $this->category->products;
        /* evento de livewire para renderizar antes */
        $this->emit('glider');
    }

    public function render()
    {
        return view('livewire.category-products');
    }
}

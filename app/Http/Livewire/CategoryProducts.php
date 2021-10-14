<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;

    public $products = [];

    public function loadPosts()
    {
        /* TAKE (numero de elementos a extraer) */
        $this->products = $this->category->products()->where('status', 2)->take(15)->get();
        /* evento de livewire para renderizar antes */
        $this->emit('glider', $this->category->id);
    }

    public function render()
    {
        return view('livewire.category-products');
    }
}

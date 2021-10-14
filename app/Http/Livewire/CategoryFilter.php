<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use Livewire\Component;

class CategoryFilter extends Component
{

    use WithPagination; //paginacion dinamica
    public $category;

    public function render()
    {

        //recuperamos los productos
        $products = $this->category->products()->where('status',2)->paginate(10);

        return view('livewire.category-filter', compact('products'));
    }
}

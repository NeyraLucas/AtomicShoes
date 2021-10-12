@props(['category'])

<div class="grid grid-cols-4 p-4">
    <div>
        <p class="text-lg font-bold text-center text-gray-400 mb-3">Subcategorias</p>

        {{-- listamos las subcategorias que vienen del modelo category instanciado en Navigation --}}
        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>
                    <a href="" class="text-gray-500 font-semibold inline-block py-1 px-4 hover:text-red-500">
                        {{$subcategory->name}}
                    </a>
                </li>
            @endforeach
            
        </ul>

    </div>

    <div class="col-span-3">
        {{-- img de las subcategorias --}}
        <img class="h-64 w-full object-cover object-center" src="{{Storage::url($category->image)}} " alt="">
    </div>

</div>
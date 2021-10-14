<div>
    <div class="bg-white rounded-lg shadow-lg">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-BlueGray-600 uppercase">{{ $category->name }}</h1>

            <div
                class="grid grid-cols-2 border border-BlueGray-200 divide-x divide-BlueGray-200 text-ColorCyan-900 cursor-pointer">
                <i class="fas fa-border-all p-3 cursor-pointer"></i>
                <i class="fas fa-th-list p-3 cursor-pointer"></i>
            </div>

        </div>
    </div>

    <div class="grid grid-cols-5">

        <aside>
            <h2 class="font-semibold text-center py-5">Subcategorías</h2>

            <ul>
                @foreach ($category->subcategories as $subcategory)
                    <li class="my-2 text-sm">
                        <a href="" class="cursor-pointer hover:text-pink-500 capitalize">{{ $subcategory->name }}</a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <div class="col-span-4">
            <ul class="grid grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <li class="bg-white rounded-lg shadow  {{ $loop->last ? '' : 'sm:mr-4' }} ">
                        <article>
                            {{-- img del producto --}}
                            <figure>
                                <img class="h-48 w-full object-cover object-center"
                                    src="{{ Storage::url($product->images->first()->url) }} " alt="">
                            </figure>
                            <div class="py-4 px-6">
                                <h1 class="text-lg font-semibold">
                                    <a href="">{{ Str::limit($product->name, 20) }} </a>
                                </h1>
                                <p class="font-bold text-gray-700">
                                    MXN {{ $product->price }}
                                </p>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>

            {{-- paginacion --}}
            <div class="mt-4">
                {{$products->links()}}
            </div>

        </div>

    </div>
</div>

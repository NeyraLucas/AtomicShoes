<x-app-layout>

    <div class="container py-8">
        @foreach ($categories as $category)
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-bold text-gray-700">
                        {{ $category->name }}
                    </h1>
                    <a href="{{route('categories.show', $category)}}" class="text-ColorCyan-700 hover:text-ColorCyan-400 hover:underline ml-2 font-semibold" target="_blank" >Ver más</a>
                </div>

                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach

    </div>

    {{-- <div class="container py-8">
        @livewire('carousel-banners')
    </div> --}}

    {{-- carousel --}}



    @push('script')
        <script>
            Livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },

                    responsive: [
                        {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2.5,
                            slidesToScroll: 2,
                            }
                        },

                        {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3.5,
                            slidesToScroll: 3,
                            }
                        },

                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4.5,
                            slidesToScroll: 4,
                            }
                        },

                        {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 5.5,
                            slidesToScroll: 5,
                            }
                        }
                    ]
                });

            });
        </script>
    @endpush

    {{-- <script>
        new Glider(document.querySelector('.banner'), {
            slidesToShow: 1,
            dots: '#dots',
            draggable: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script> --}}



</x-app-layout>

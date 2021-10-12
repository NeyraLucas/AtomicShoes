<x-app-layout>

    <div class="container py-8">
        <section>
            <h1 class="text-lg uppercase font-bold text-gray-700">
                {{ $categories->first()->name }}
            </h1>

            @livewire('category-products', ['category' => $categories->first()])
        </section>
    </div>

    <div class="container py-8">
        @livewire('carousel-banners')
    </div>

    {{-- carousel --}}

    

    @push('script')
        <script>
            Livewire.on('glider', function() {

                new Glider(document.querySelector('.glider'), {
                    slidesToShow: 5.5,
                    slidesToScroll: 5,
                    draggable: true,
                    dots: '.dots',
                    arrows: {
                        prev: '.glider-prev',
                        next: '.glider-next'
                    }
                });

            });
        </script>
    @endpush

    <script>
        new Glider(document.querySelector('.banner'), {
            slidesToShow: 1,
            dots: '#dots',
            draggable: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>



</x-app-layout>

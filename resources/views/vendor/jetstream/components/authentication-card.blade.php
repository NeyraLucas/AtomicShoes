<style>
    .bg-shoes{
        background-color: #F1EEE9;
    }

    @media screen and (min-width: 1024px){

        .fondo__shoes__img{
            display: block !important;
            max-width: 100%;
        }

        .content__login{
        width: 500px;
        display: flex;
        justify-content: center;
        margin: 0 auto;
    }
    }

</style>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-shoes">
    
    <div class="grid grid-flow-col auto-cols-max">

        <div class="fondo__shoes__img" style="display: none;">
           <img src=" {{ asset('img/men.jpg') }}"  alt="tenis" style=" width: 696px; height: 1024px;">
        </div>

        <div class="flex flex-col items-center py-10 content__login">
            <div class="text-center">
                {{ $logo }}
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
    
    

    
</div>


{{-- ../../../../../storage/app/public/img/men.jpg --}}
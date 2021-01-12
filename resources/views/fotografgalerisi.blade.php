@include('layouts.header')
@include('layouts.header-inline')

<div class="container mx-auto h-auto mb-8">

    <div class="w-full h-48 bg-right xl:bg-top bg-custom relative mt-6">
        <div class="absolute bottom-6 left-6">
            <h3 class="text-4xl font-bold text-white">Foto Galeri</h3>
        </div>
    </div>

    <p class="my-6">
        <div class="text-center mt-12">
            <h3 style="color: #1fa2ff" class="text-4xl font-bold"></h3>
            <p class="text-gray-500 mb-4">Kliniğimizden görüntülere buradan ulaşabilirsiniz.</p>
        </div>
        <div class="grid grid-cols-12 grid-flow-row gap-4 w-full px-4 md:px-0">
            <div class="col-span-6 md:col-span-3">
                <a href="{{ asset('images/1.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                    <img class="w-full h-32 md:h-64 object-cover rounded-md shadow-2xl" src="{{ asset('images/1.jpeg') }}">
                </a>
            </div>
            <div class="col-span-6 md:col-span-6">
                <a href="{{ asset('images/5.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                    <img class="w-full h-32 md:h-64 object-cover rounded-md shadow-2xl" src="{{ asset('images/5.jpeg') }}">
                </a>
            </div>
            <div class="col-span-6 md:col-span-3">
                <a href="{{ asset('images/3.jpg') }}" data-lightbox="image-1" data-title="My caption">
                    <img class="w-full h-32 md:h-64 object-cover rounded-md shadow-2xl" src="{{ asset('images/3.jpg') }}">
                </a>
            </div>
            <div class="col-span-6 md:col-span-4">
                <a href="{{ asset('images/4.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                    <img class="w-full h-32 md:h-64 object-cover rounded-md shadow-2xl" src="{{ asset('images/4.jpeg') }}">
                </a>
            </div>
            <div class="col-span-6 md:col-span-4">
                <a href="{{ asset('images/2.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                    <img class="w-full h-32 md:h-64 object-cover rounded-md shadow-2xl" src="{{ asset('images/2.jpeg') }}">
                </a>
            </div>
            <div class="col-span-6 md:col-span-4">
                <a href="{{ asset('images/5.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                    <img class="w-full h-32 md:h-64 object-cover rounded-md shadow-2xl" src="{{ asset('images/5.jpeg') }}">
                </a>
            </div>
        </div>
    </p>
</div>













@include('layouts.footer')

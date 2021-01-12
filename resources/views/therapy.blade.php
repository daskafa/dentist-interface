@include('layouts.header')
@include('layouts.header-inline')
        <div class="md:grid grid-cols-12 items-center h-auto md:container md:mx-auto">
            <div class="col-span-6">
                <h3 class="text-3xl my-6 text-center">Tüm Tedavilerimiz</h3>
                <ul>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Diş Çekimi</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Implant</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Diş Eti Tedavileri</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Dolgu</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Estetik Diş Hekimliği</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Diş Beyazlatma</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Zirkonyum</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Kanal Tedavisi</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Porselen</a></li>
                    <li class="mt-6"><a class="py-2 px-4 bg-gray-600 w-3/4 rounded mx-auto flex md:w-3/4 text-white" href="#">Çocuk Diş Hekimliği</a></li>
                </ul>
            </div>
            <div class="col-span-6 mt-12 md:mt-0">
                    <img class="shadow-lg h-96 object-cover w-full object-right" src="{{ asset('images/slider-2.jpg') }}" alt="">
            </div>
        </div>
@include('layouts.footer')

<div class="container mx-auto h-auto">
    <div class="relative lg:block hidden">
        <div class="grid grid-cols-4 grid-flow-row h-28 items-center">
            <div class="col-span-1">
                <div>
                    <img class="w-48 h-auto" src="{{ asset('images/logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-span-3 hidden md:block">
                <ul class="flex justify-end">
                    <li class="flex">
                        <svg class="mr-4 text-gray-800" width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                        </svg>
                        <div class="text-sm mr-12 text-gray-800">
                            <p>Müşteri Hizmetleri</p>
                            <span class="font-bold">0546 775 10 10</span>
                        </div>
                    </li>
                    <li class="flex">
                        <svg class="mr-4 text-gray-800" width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                        <div class="text-sm text-gray-800">
                            <p>Adres Gaziosmanpaşa Mahallesi</p>
                            <span class="font-bold">13_209. Sokak No.18/B Altıeylül/Balıkesir</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="px-8 relative flex justify-between py-4 lg:hidden md:flex ">
        <img class="w-48 h-auto" src="{{ asset('images/logo.png') }}" alt="">

        <p id="mobile-menu-open"><svg class="cursor-pointer text-gray-700" width="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg></p>
    </div>

    <div style="height: 1px" class="relative bg-gray-800 opacity-30 lg:block sm:hidden"></div>

    <div class="relative">
        <div class="grid grid-cols-8 grid-flow-row grid-rows-3 lg:grid-rows-1 lg:grid hidden ">
            <div class="xl:col-span-6 lg:col-span-8 md:col-span-8">
                <ul class="flex mt-4">
                    <li class="md:text-lg          hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li class="md:text-lg  md:ml-8 hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                    <li class="md:text-lg  md:ml-8 hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="{{ route('therapy') }}">Tedaviler</a></li>
                    <li class="md:text-lg  md:ml-8 hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="#">Anlaşmalı Kurumlar</a></li>
                    <li class="md:text-lg  md:ml-8 hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="{{ route('fotografgalerisi') }}">Foto Galeri</a></li>
                    <li class="md:text-lg  md:ml-8 hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="{{ route('insankaynaklari') }}">İnsan Kaynakları</a></li>
                    <li class="md:text-lg  md:ml-8 hover:text-blue-900 hover:underline transition duration-300  text-gray-800"><a href="{{ route('iletisim') }}">İletişim</a></li>
                </ul>
            </div>
            <div class="col-span-2">
                <div class="flex xl:justify-end lg:justify-start text-2xl mt-4">
                <a href="socialmedia"><svg class="mr-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                <a href="socialmedia"><svg class="mr-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                <a href="socialmedia"><svg class="     text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                </div>
            </div>
        </div>

        {{-- mobile menu --}}

        <div id="mobile-menu" class="bg-white bg-no-repeat h-full w-full bg-center fixed top-0 left-0 px-12 pt-12 z-10 overflow-hidden hidden ">
            <div class="flex justify-between mb-6">
                <img class="w-48 h-auto" src="{{ asset('images/logo.png') }}" alt="">

                <p id="mobile-menu-close"><svg class="cursor-pointer text-gray-700" width="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg></p>
            </div>
            <hr>
            <ul class="space-y-12">
                <li class="mt-8 text-2xl list-none text-center"><a href="{{ route('home') }}">Anasayfa</a></li>
                <li class="text-2xl list-none text-center"><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                <li class="text-2xl list-none text-center"><a href="{{ route('therapy') }}">Tedaviler</a></li>
                <li class="text-2xl list-none text-center"><a href="#">Anlaşmalı Kurumlar</a></li>
                <li class="text-2xl list-none text-center"><a href="{{ route('fotografgalerisi') }}">Foto Galeri</a></li>
                <li class="text-2xl list-none text-center"><a href="{{ route('insankaynaklari') }}">İnsan Kaynakları</a></li>
                <li class="text-2xl list-none text-center"><a href="{{ route('iletisim') }}">İletişim</a></li>
            </ul>
        </div>

        {{-- mobile menu --}}

    </div>
</div>

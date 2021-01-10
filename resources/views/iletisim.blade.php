@include('layouts.header')
<div style="height: auto" class="container mx-auto">
    <div class="relative">
        <div class="grid grid-cols-4 grid-flow-row h-28 items-center">
            <div class="col-span-1">
                <div>
                    <img class="w-48 h-auto" src="{{ asset('images/logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-span-3">
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

    <div style="height: 1px" class="relative bg-gray-800  opacity-30 "></div>

    <div class="relative">
        <div class="grid grid-cols-8 grid-flow-row">
            <div class="col-span-6">
                <div>
                    <ul class="flex mt-4">
                        <li class="     text-lg text-gray-800"><a href="#">Anasayfa</a></li>
                        <li class="ml-8 text-lg text-gray-800"><a href="#">Hakkımızda</a></li>
                        <li class="ml-8 text-lg text-gray-800"><a href="#">Tedaviler</a></li>
                        <li class="ml-8 text-lg text-gray-800"><a href="#">Anlaşmalı Kurumlar</a></li>
                        <li class="ml-8 text-lg text-gray-800"><a href="#">Foto Galeri</a></li>
                        <li class="ml-8 text-lg text-gray-800"><a href="#">İnsan Kaynakları</a></li>
                        <li class="ml-8 text-lg text-gray-800"><a href="#">İletişim</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex justify-end text-2xl mt-4">
                <a href="#"><svg class="mr-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                <a href="#"><svg class="mr-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                <a href="#"><svg class="     text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container mx-auto h-auto mb-8">
    <div class="w-full h-48 bg-custom relative">
        <div class="absolute bottom-6 left-6">
            <h3 class="text-4xl font-bold text-white">İletişim</h3>
        </div>
    </div>
    <div class="my-6">
        <div class="grid grid-cols-6">
            <div class="col-span-3">
                <div class="m-8 p-8 rounded-md bg-gray-100 shadow-xl">
                    <h3 class="text-center mt-4 font-bold">Adresimiz</h3>
                    <p class="text-center">Gaziosmanpaşa Mahallesi 13_209. Sokak No.18/B Altıeylül/Balıkesir</p>
                    <h3 class="text-center mt-2 font-bold">Mail Adresimiz</h3>
                    <p class="text-center">info@dent10balikesir.com</p>
                    <h3 class="text-center mt-2 font-bold">Bizi Arayın</h3>
                    <p class="text-center">0546 775 10 10 /</p>
                </div>
            </div>
            <div class="col-span-3">
                <div>
                    <iframe class="rounded-md shadow-xl" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6147.216631978343!2d27.887892!3d39.613505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99f6fb58ab73ce73!2s%C3%96zen%20Eczanesi!5e0!3m2!1str!2str!4v1610214588292!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>













@include('layouts.footer')

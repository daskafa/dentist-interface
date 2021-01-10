@include('layouts.header')










        <div class="absolute w-full">
            <img class="xl:object-center lg:object-left h-screen w-full object-cover" src="{{ asset('images/slider-2.jpg') }}" alt="">
        </div>

        <div style="height: 969px" class="container mx-auto">
            <div class="relative lg:block md:hidden">
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

            <div class="relative flex justify-between pt-12 lg:hidden md:flex ">
                <img class="w-48 h-auto" src="{{ asset('images/logo.png') }}" alt="">

                <p id="mobile-menu-open">Menu <> </p>
            </div>

            <div style="height: 1px" class="relative bg-gray-800 opacity-30 lg:block md:hidden"></div>

            <div class="relative">
                <div class="grid grid-cols-8 grid-flow-row grid-rows-3 lg:block md:hidden ">
                    <div class="xl:col-span-6 lg:col-span-8 md:col-span-8">
                        <ul class="flex mt-4">
                            <li class="md:text-lg      text-gray-800"><a href="#">Anasayfa</a></li>
                            <li class="md:text-lg  md:ml-4  text-gray-800"><a href="#">Hakkımızda</a></li>
                            <li class="md:text-lg  md:ml-4  text-gray-800"><a href="#">Tedaviler</a></li>
                            <li class="md:text-lg  md:ml-4  text-gray-800"><a href="#">Anlaşmalı Kurumlar</a></li>
                            <li class="md:text-lg  md:ml-4  text-gray-800"><a href="#">Foto Galeri</a></li>
                            <li class="md:text-lg  md:ml-4  text-gray-800"><a href="#">İnsan Kaynakları</a></li>
                            <li class="md:text-lg  md:ml-4  text-gray-800"><a href="#">İletişim</a></li>
                        </ul>
                    </div>
                    <div class="col-span-2">
                        <div class="flex xl:justify-end lg:justify-start text-2xl mt-4">
                        <a href="#"><svg class="mr-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                        <a href="#"><svg class="mr-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                        <a href="#"><svg class="     text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                        </div>
                    </div>
                </div>

                {{-- mobile menu --}}

                <div id="mobile-menu" class="h-full w-full bg-white fixed top-0 left-0 px-12 pt-12 z-10 overflow-hidden hidden ">
                    <div class="flex justify-between mb-6">
                        <img class="w-48 h-auto" src="{{ asset('images/logo.png') }}" alt="">

                        <p id="mobile-menu-close">KapatX</p>
                    </div>
                    <hr>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">Anasayfa</a></li>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">Hakkımızda</a></li>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">Tedaviler</a></li>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">Anlaşmalı Kurumlar</a></li>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">Foto Galeri</a></li>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">İnsan Kaynakları</a></li>
                    <li class="mt-14 text-2xl list-none text-center"><a href="#">İletişim</a></li>
                </div>

                {{-- mobile menu --}}

                <h3 class="text-5xl mt-36 text-gray-800">
                    Haydi Birlikte<br>
                </h3>
                <span style="" class="text-9xl ml-8 font-serif text-gray-800 font-bold">Gülelim!</span>
                <p class="text-gray-800 mt-4 xl:w-2/6 lg:w-2/3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repudiandae officiis expedita, earum soluta ut praesentium mollitia doloremque? Eveniet accusamus mollitia fugit porro ipsa officiis cumque et odio beatae a.</p>
                <div class="mt-12"><a class="px-8 py-4 hover:bg-transparent bg-gray-800 rounded-md hover:text-gray-800 border-2 hover:border-gray-800 transition duration-300 text-white mt-10" href="#">Keşfetmeye Başla</a></div>
            </div>
        </div>


        <div class="container mx-auto">
            <div class="flex justify-between items-end my-6">
                <div>
                    <h3 style="color:#1fa2ff;" class="text-4xl font-bold">Tedavilerimiz</h3>
                </div>
                    <a style="background-color: #1fa2ff; border-color:#1fa2ff;" class="flex py-4 px-8 text-white transition duration-300 border-2 rounded-md " href="#">
                        <p style="margin-top: 3px;margin-right:15px;">Tüm Tedavilerimiz</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </a>
            </div>
            <div class="swiper-container s1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mb-12">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/zirkonyum.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Zirkonyum</h3>
                            <p class="mt-2 text-sm">Klasik porselen köprü ve protezlerin alt yapısı olan gri metal yerine uygulanan beyaz renkte bir alaşımdır.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/kanal-tedavisi.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Kanal Tedavisi</h3>
                            <p class="mt-2 text-sm">Kanal tedavisi   dişte meydana gelen çürük, travma, kırık bazen de protetik durumlara    katkı sağlamaya yönelik olarak gerçekleştirilen tedavidir.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/estetik-dis.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Estetik Diş Hekimliği</h3>
                            <p class="mt-2 text-sm">Estetik Diş Hekimliği, hastanın kişisel istekleri doğrultusunda sağlıklı ve estetik gülüşü planlamaktır. Dişler, birbirleri ve onları çevreleyen yumuşak dokular ile uyumlu olarak dizilmiştir.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/porselen.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Porselen</h3>
                            <p class="mt-2 text-sm">Porselen diş, herhangi bir nedenle kaybedilmiş ya da işlevini kaybetmiş olan dişlere uygulanan ya da estetik kaygı ile yapılan işleme denir.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/dolgu.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Dolgu</h3>
                            <p class="mt-2 text-sm">Dolgu tedavisi çürük dişlere ve kırılmış veya herhangi bir nedenden dolayı çatlamış olan dişlere uygulanabilir. Çeşitli nedenlerden dolayı deforme olmuş dişler, dolgu tedavisi ile eski görünümünü kazanabilir.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/cocuk-dis.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Çocuk Diş Hekimliği</h3>
                            <p class="mt-2 text-sm">Çocuk diş hekimliğinin birinci amacı ortaya çıkmış problemleri tedavi etmekten çok bu sorunların oluşmasını engelleyecek önlemleri almaktır.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/dis-beyazlatma.jpeg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Diş Beyazlatma</h3>
                            <p class="mt-2 text-sm">Beyazlatma dişlerin yapısında (mine ve dentin tabakasında) oluşan renklenmeleri giderme işlemidir.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="height: 26em;" class="w-full bg-gray-200">
                            <img class="h-60 w-full object-cover" src="{{ asset('images/dis-eti-tedavileri.jpg') }}">

                            <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                            </div>

                            <div class="m-4 pt-12 text-gray-800">
                                <h3>Diş Eti Tedavisi</h3>
                                <p class="mt-2 text-sm">Periodontitis dişleri saran kemik ve diş eti dokularının iltihabıdır. Dişler ağız içinde görebildiğimiz kron kısmı ve kemik içine gömülmüş ‘kök’ten oluşmuştur.</p>
                            </div>
                        </div>
                        </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/dis-cekimi.jpg') }}">

                        <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                        </div>

                        <div class="m-4 pt-12 text-gray-800">
                            <h3>Diş Çekimi</h3>
                            <p class="mt-2 text-sm">Diş çekimi, alveol kemiğindeki diş alveolden dişlerin çıkarılmasıdır.</p>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="height: 26em;" class="w-full bg-gray-200">
                            <img class="h-60 w-full object-cover" src="{{ asset('images/implant.jpg') }}">

                            <div class="w-20 h-20 bg-white shadow-2xl absolute top-48 left-8">

                            </div>

                            <div class="m-4 pt-12 text-gray-800">
                                <h3>Implant</h3>
                                <p class="mt-2 text-sm">İmplant, eksik olan dişlerin fonksiyon ve estetiğini tekrar sağlamak amacıyla çene kemiğine yerleştirilen ve uygun malzemeden yapılan yapay diş köküdür.</p>
                            </div>
                        </div>
                        </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                </div>
        </div>





        <div class="absolute w-full">
            <img style="height: 40em;" class="w-full object-cover" src="{{ asset('images/x.jpg') }}" alt="">
        </div>


        <div class="relative">
            <div class="container mx-auto">
                <div style="height: 640px" class="grid items-center grid-cols-2 grid-flow-row ">
                    <div class="col-span-1 text-white">
                        <h3 class="lg:text-5xl md:text-4xl font-bold">Kaliteli, Güvenilir ve <br> Sağlıklı Yaşam İçin Buradayız..</h3>
                        <p class="mt-4">Türkiye'nin her tarafından diş sağlığı ile sorun yaşayanlar için sağlıklı ve kaliteli yaşamın kapılarını açıyoruz.</p>
                        <p class="mt-4 font-bold">En İyi Olanakları Sunuyoruz..</p>
                        <p class="mt-4">En son teknoloji cihazlarımız ile hastalarımıza en kaliteli hizmeti vermek için çabalıyoruz. Tüm personelimiz Covid-19 hassasiyeti ile yaklaşım sergilemektedir. Hijyen ve dezenfektasyona çok önem vermekteyiz. Hastalarımızı tam memnuniyet seviyesinde uğurlamak için elimizden geleni yapıyoruz.</p>
                        <p class="mt-4 font-bold">Bunun için varız..</p>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <img style="width: 35em;" class="mx-auto" src="{{ asset('images/teeth.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <h3 style="color: #1fa2ff" class="text-4xl font-bold">Foto Galeri</h3>
            <p class="text-gray-500 mb-4">Kliniğimizden görüntülere buradan ulaşabilirsiniz.</p>
        </div>
        <div class="grid grid-cols-12 grid-flow-row gap-12">
            <div class="col-span-3">
                <img class="w-full h-64 object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
            <div class="col-span-6">
                <img class="w-full h-64 object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
            <div class="col-span-3">
                <img class="w-full h-64 object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
        </div>
        <div class="grid grid-cols-12 grid-flow-row gap-12 mt-8 mb-12">
            <div class="col-span-4">
                <img class="w-full h-64 object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
            <div class="col-span-4">
                <img class="w-full h-64 object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
            <div class="col-span-4">
                <img class="w-full h-64 object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
        </div>
        {{-- <div class="grid grid-cols-12 grid-flow-row gap-12 mt-8">
            <div class="col-span-3">
                <img class="w-full h-full object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
            <div class="col-span-6">
                <img class="w-full h-full object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
            <div class="col-span-3">
                <img class="w-full h-full object-cover rounded-md shadow-2xl" src="https://picsum.photos/600/175">
            </div>
        </div> --}}



@include('layouts.footer')
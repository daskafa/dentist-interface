@include('layouts.header')
        <div class="absolute w-full">
            <img class="opacity-50 xl:object-center lg:object-left h-screen w-full object-cover" src="{{ asset('images/slider-2.jpg') }}" alt="">
        </div>

        <div class="container mx-auto h-screen">
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

                <h3 class="text-5xl md:text-6xl mt-24 text-gray-800 md:text-left text-center">
                    Haydi Birlikte<br>
                </h3>
                <div style="" class="text-7xl md:text-8xl text-center md:ml-8 sm:ml-0 md:text-left sm:text-center font-serif text-gray-800 font-bold">Gülelim!</div>
                <p class="px-8 md:px-0 font-bold text-gray-800 mt-4 xl:w-2/6 lg:w-2/3 text-center md:text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repudiandae officiis expedita, earum soluta ut praesentium mollitia doloremque? Eveniet accusamus mollitia fugit porro ipsa officiis cumque et odio beatae a.</p>
                <div class="md:mt-12 sm:mt-0 md:block flex justify-center"><a class="px-8 py-4 hover:bg-transparent bg-gray-800 rounded-md hover:text-gray-800 border-2 hover:border-gray-800 transition duration-300 text-white mt-10" href="#x">Keşfetmeye Başla</a></div>
            </div>
        </div>


        <div class="container mx-auto" id="x">
            <div class="flex justify-between my-6 items-center">
                <div>
                    <h3 style="color:#1fa2ff;" class="text-4xl font-bold">Tedavilerimiz</h3>
                </div>
                    <a style="background-color: #1fa2ff; border-color:#1fa2ff;" class="md:flex md:flex-row hidden py-4 px-8 text-white transition duration-300 border-2 rounded-md " href="{{ route('therapy') }}">
                        <p style="margin-top: 3px;margin-right:15px;">Tüm Tedavilerimiz</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </a>
            </div>
            <div class="swiper-container s1 flex w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mb-12">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/zirkonyum.jpg') }}">
                        <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('zirkonyum') }}">
                                <h3>Zirkonyum</h3>
                                <p class="mt-2 text-sm">Klasik porselen köprü ve protezlerin alt yapısı olan gri metal yerine uygulanan beyaz renkte bir alaşımdır.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/kanal-tedavisi.jpg') }}">

                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('kanaltedavisi') }}">
                                <h3>Kanal Tedavisi</h3>
                                <p class="mt-2 text-sm">Kanal tedavisi   dişte meydana gelen çürük, travma, kırık bazen de protetik durumlara    katkı sağlamaya yönelik olarak gerçekleştirilen tedavidir.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/estetik-dis.jpg') }}">
                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('estetikdishekimligi') }}">
                                <h3>Estetik Diş Hekimliği</h3>
                                <p class="mt-2 text-sm">Estetik Diş Hekimliği, hastanın kişisel istekleri doğrultusunda sağlıklı ve estetik gülüşü planlamaktır. Dişler, birbirleri ve onları çevreleyen yumuşak dokular ile uyumlu olarak dizilmiştir.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/porselen.jpg') }}">
                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('porselen') }}">
                                <h3>Porselen</h3>
                                <p class="mt-2 text-sm">Porselen diş, herhangi bir nedenle kaybedilmiş ya da işlevini kaybetmiş olan dişlere uygulanan ya da estetik kaygı ile yapılan işleme denir.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/dolgu.jpg') }}">
                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('dolgu') }}">
                                <h3>Dolgu</h3>
                                <p class="mt-2 text-sm">Dolgu tedavisi çürük dişlere ve kırılmış veya herhangi bir nedenden dolayı çatlamış olan dişlere uygulanabilir. Çeşitli nedenlerden dolayı deforme olmuş dişler, dolgu tedavisi ile eski görünümünü kazanabilir.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/cocuk-dis.jpg') }}">
                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('cocukdishekimligi') }}">
                                <h3>Çocuk Diş Hekimliği</h3>
                                <p class="mt-2 text-sm">Çocuk diş hekimliğinin birinci amacı ortaya çıkmış problemleri tedavi etmekten çok bu sorunların oluşmasını engelleyecek önlemleri almaktır.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/dis-beyazlatma.jpeg') }}">
                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('disbeyazlatma') }}">
                                <h3>Diş Beyazlatma</h3>
                                <p class="mt-2 text-sm">Beyazlatma dişlerin yapısında (mine ve dentin tabakasında) oluşan renklenmeleri giderme işlemidir.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="height: 26em;" class="w-full bg-gray-200">
                            <img class="h-60 w-full object-cover" src="{{ asset('images/dis-eti-tedavileri.jpg') }}">
                                    <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                            <div class="m-4 pt-12 text-gray-800">
                                <a href="{{ route('disetitedavileri') }}">
                                    <h3>Diş Eti Tedavisi</h3>
                                    <p class="mt-2 text-sm">Periodontitis dişleri saran kemik ve diş eti dokularının iltihabıdır. Dişler ağız içinde görebildiğimiz kron kısmı ve kemik içine gömülmüş ‘kök’ten oluşmuştur.</p>
                                </a>
                            </div>
                        </div>
                        </div>
                    <div class="swiper-slide">
                    <div style="height: 26em;" class="w-full bg-gray-200">
                        <img class="h-60 w-full object-cover" src="{{ asset('images/dis-cekimi.jpg') }}">

                           <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                        <div class="m-4 pt-12 text-gray-800">
                            <a href="{{ route('discekimi') }}">
                                <h3>Diş Çekimi</h3>
                                <p class="mt-2 text-sm">Diş çekimi, alveol kemiğindeki diş alveolden dişlerin çıkarılmasıdır.</p>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="height: 26em;" class="w-full bg-gray-200">
                            <img class="h-60 w-full object-cover" src="{{ asset('images/implant.jpg') }}">
                                    <div class="text-gray-400 w-14 h-14 bg-white shadow-2xl absolute top-52 left-8">
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                              </svg>
                        </div>
                            <div class="m-4 pt-12 text-gray-800">
                                <a href="{{ route('implant') }}">
                                    <h3>Implant</h3>
                                    <p class="mt-2 text-sm">İmplant, eksik olan dişlerin fonksiyon ve estetiğini tekrar sağlamak amacıyla çene kemiğine yerleştirilen ve uygun malzemeden yapılan yapay diş köküdür.</p>
                                </a>
                            </div>
                        </div>
                        </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                </div>
                <a style="background-color: #1fa2ff; border-color:#1fa2ff;" class="justify-center items-center space-x-2 mb-4 flex md:hidden py-4 px-8 text-white transition duration-300 border-2 " href="#">
                    <p>Tüm Tedavilerimiz</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </a>
        </div>
        <div style="background-image: url({{ asset('images/x.jpg') }})" class="bg-center py-8 bg-fixed md:py-12">
            <div class="container mx-auto">
                <div class="flex md:flex-row flex-col-reverse items-center px-4">
                    <div class="text-white text-center md:text-left">
                        <h3 class="text-2xl text-center md:text-left md:text-4xl font-bold">Kaliteli, Güvenilir ve <br> Sağlıklı Yaşam İçin Buradayız..</h3>
                        <p class="mt-4 text-justify">Türkiye'nin her tarafından diş sağlığı ile sorun yaşayanlar için sağlıklı ve kaliteli yaşamın kapılarını açıyoruz.</p>
                        <p class="mt-4 font-bold">En İyi Olanakları Sunuyoruz..</p>
                        <p class="mt-4 text-justify">En son teknoloji cihazlarımız ile hastalarımıza en kaliteli hizmeti vermek için çabalıyoruz. Tüm personelimiz Covid-19 hassasiyeti ile yaklaşım sergilemektedir. Hijyen ve dezenfektasyona çok önem vermekteyiz. Hastalarımızı tam memnuniyet seviyesinde uğurlamak için elimizden geleni yapıyoruz.</p>
                        <p class="mt-4 font-bold">Bunun için varız..</p>
                    </div>
                    <div class="">
                        <img class=" md:w-full lg:w-full mx-auto w-40" src="{{ asset('images/teeth.png') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 px-12">
            <h3 style="color: #1fa2ff" class="text-4xl font-bold">Foto Galeri</h3>
            <p class="text-gray-500 mb-4">Kliniğimizden görüntülere buradan ulaşabilirsiniz.</p>
        </div>






        <div class="grid grid-cols-12 grid-flow-row gap-4 w-full px-4 md:px-12">
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
@include('layouts.footer')

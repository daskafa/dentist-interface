<footer class="px-12 pt-8 h-auto pb-2" style="background-color: #f6f9f9">
    <div class="flex md:flex-row flex-col">
        <div class="flex flex-col w-full">
        <img class="m-auto md:m-0 w-40 h-auto" src="{{ asset('images/logo.png') }}" alt="">
        <p class="mt-4 text-gray-500 text-center md:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi expedita aperiam tempora nisi architecto excepturi itaque dolorem ducimus. Quibusdam aut reprehenderit.</p>
        <p class="mt-4 text-gray-500 text-center md:text-left">Bize Güvenen <div class="font-bold text-xl text-gray-600 text-center md:text-left">1350</div> <p class="text-center md:text-left">mutlu müşteri</p> </p>
        </div>
        <div class=" flex flex-col w-full">
            <h3 style="color:#1fa2ff;" class="text-2xl md:text-left text-center md:m-0 sm:mt-4">Tedavilerimiz</h3>
                <div class="flex flex-row">
                    <ul class="text-left mt-6 text-gray-500 ml-0">
                        <li class="hover:text-gray-600 transition duration-300 ">Implant</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Diş Çekimi</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Kanal Tedavisi</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Diş Beyazlatma</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Çocuk Diş Hekimliği</li>
                    </ul>
                    <ul class="text-center md:text-left mt-6 text-gray-500 ml-0 md:ml-36">
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Estetik Diş Hekimliği</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Diş Eti Tedavileri</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Zirkonyum</li>
                        <li class="hover:text-gray-600 transition duration-300 mt-2">Porselen</li>
                        <li class="hover:text-gray-600 transition duration-300 ">Dolgu</li>
                    </ul>
                </div>
        </div>
        <div class=" flex flex-col w-full text-center md:text-left">
            <h3 style="color:#1fa2ff;" class="text-2xl">İletişim</h3>
            <h3 class="mt-4 font-bold">Adresimiz</h3>
            <p class="">Gaziosmanpaşa Mahallesi 13_209. Sokak No.18/B Altıeylül/Balıkesir</p>
            <h3 class="mt-2 font-bold">Mail Adresimiz</h3>
            <p>info@dent10balikesir.com</p>
            <h3 class="mt-2 font-bold">Bizi Arayın</h3>
            <p>0546 775 10 10 /</p>
        </div>
    </div>
</footer>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>










{{--
<div class="grid grid-cols-12 grid-flow-row pt-12 lg:text-base md:text-sm">
    <div class="col-span-12 md:col-span-4 sm:col-span-12">
        <img class="m-auto w-40 h-auto" src="{{ asset('images/logo.png') }}" alt="">
        <p class="mt-4 text-gray-500 md:w-5/6 sm:w-full md:text-left sm:text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi expedita aperiam tempora nisi architecto excepturi itaque dolorem ducimus. Quibusdam aut reprehenderit.</p>
        <p class="mt-4 text-gray-500 md:text-left sm:text-center">Bize Güvenen <div class="font-bold text-xl text-gray-600 md:text-left sm:text-center">1350</div> <p class="md:text-left sm:text-center">mutlu müşteri</p> </p>
    </div>
    <div class="col-span-12 md:col-span-4 sm:col-span-12">
        <h3 style="color:#1fa2ff;" class="text-2xl md:text-left sm:text-center md:m-0 sm:mt-4">Tedavilerimiz</h3>
        <div class="grid grid-cols-2 grid-flow-row gap-4">
            <div class="col-span-1">
                <ul class="mt-6 text-gray-500 list-outside?? md:text-left sm:text-center">
                    <li class="hover:text-gray-600 transition duration-300 ">Implant</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Diş Çekimi</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Kanal Tedavisi</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Diş Beyazlatma</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Çocuk Diş Hekimliği</li>
                </ul>
            </div>
            <div class="col-span-1">
                <ul class="mt-6 text-gray-500 list-outside?? md:text-left sm:text-center">
                    <li class="hover:text-gray-600 transition duration-300 ">Dolgu</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Estetik Diş Hekimliği</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Diş Eti Tedavileri</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Zirkonyum</li>
                    <li class="hover:text-gray-600 transition duration-300 mt-2">Porselen</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-span-12 md:col-span-4 sm:col-span-12 text-gray-500 md:text-left sm:text-center">
        <h3 style="color:#1fa2ff;" class="text-2xl md:text-left sm:text-center md:m-0 sm:mt-4">İletişim</h3>
        <h3 class="mt-4 font-bold">Adresimiz</h3>
        <p class="">Gaziosmanpaşa Mahallesi 13_209. Sokak No.18/B Altıeylül/Balıkesir</p>
        <h3 class="mt-2 font-bold">Mail Adresimiz</h3>
        <p>info@dent10balikesir.com</p>
        <h3 class="mt-2 font-bold">Bizi Arayın</h3>
        <p>0546 775 10 10 /</p>
    </div>
</div> --}}

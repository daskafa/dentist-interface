<footer class="px-4 md:px-12 bg-gray-200 mt-12 pt-8 h-auto pb-2" style="background-color:#f6f9f9;">
    <div class="flex lg:flex-row flex-col">
        <div class="flex flex-col w-full">
        <img class="md:m-0 w-40 h-auto" src="{{ asset('images/logo.png') }}" alt="">
        <p class="mt-6 text-gray-500 lg:w-9/12 lg:text-justify text-left md:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi expedita aperiam tempora nisi architecto excepturi itaque dolorem ducimus. Quibusdam aut reprehenderit.</p>
        <p class="mt-4 text-gray-500 text-left md:text-left">Bize Güvenen <div class="font-bold text-xl text-gray-400 md:text-left">1350 mutlu müşteri</div></p>
        </div>
        <div class=" flex flex-col w-full mt-4">
            <h3 style="color:#1fa2ff;" class="text-2xl md:text-left md:m-0 sm:mt-4">Tedavilerimiz</h3>
                <div class="flex flex-row">
                    <ul class="text-left mt-6 text-gray-500 ml-0">
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300     "><a href="{{ route('discekimi') }}">Diş Çekimi</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('zirkonyum') }}">Zirkonyum</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('porselen') }}">Porselen</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('implant') }}">Implant</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('dolgu') }}">Dolgu</a></li>
                    </ul>
                    <ul class="md:text-left mt-6 text-gray-500 ml-8 md:ml-12 lg:ml-16">
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300     "><a href="{{ route('estetikdishekimligi') }}">Estetik Diş Hekimliği</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('cocukdishekimligi') }}">Çocuk Diş Hekimliği</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('disetitedavileri') }}">Diş Eti Tedavileri</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('disbeyazlatma') }}">Diş Beyazlatma</a></li>
                        <li class="hover:text-blue-900 hover:underline cursor-pointer transition duration-300 mt-4"><a href="{{ route('kanaltedavisi') }}">Kanal Tedavisi</a></li>
                    </ul>
                </div>
        </div>
        <div class=" flex flex-col w-full mt-4 md:text-left mb-6">
            <h3 style="color:#1fa2ff;" class="text-2xl">İletişim</h3>
            <h3 class="mt-6 font-bold">Adresimiz</h3>
            <p class="">Gaziosmanpaşa Mahallesi 13_209. Sokak No.18/B Altıeylül/Balıkesir</p>
            <h3 class="mt-4 font-bold">Mail Adresimiz</h3>
            <p><a href="mailto:mail@mail.com">info@dent10balikesir.com</a></p>
            <h3 class="mt-4 font-bold">Bizi Arayın</h3>
            <p><a href="tel:111-111-111">0546 775 10 10 </a>/</p>
        </div>
    </div>
</footer>
<div class="bg-gray-900 py-2 px-4">
    <p class="text-base sm:text-base text-center text-white">© 2021 Özel Dent10 Balıkesir Ağız ve Diş Sağlığı Polikliniği | Tüm hakları saklıdır.</p>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>
</body>
</html>

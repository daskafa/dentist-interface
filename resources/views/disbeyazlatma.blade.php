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
            <h3 class="text-4xl font-bold text-white">Diş Beyazlatma</h3>
        </div>
    </div>
    <p class="my-6">
    <p><strong>Bleaching (Diş Beyazlatma) işlemi nedir ve nasıl yapılır?</strong></p>

    <p class="mt-4">Beyazlatma dişlerin yapısında (mine ve dentin tabakasında) oluşan renklenmeleri giderme işlemidir. Şu anda bilinen iki değişik beyazlatma yöntemi vardır. Bunlardan ilki hastanın kendi başına uygulayabileceği bir yöntemdir, aşamaları şöyledir:</p>

    <p class="mt-4">Hekimin ağızdan ölçü alıp, dişlerinizin üzerine takabileceğiniz ince lastik kalıpları hazırlatması, Hastanın kendisi için hazırlanmış özel kalıbın içerisine ilaç yerleştirerek bu kalıbı beyazlatılacak dişlerin üstüne günde en az 6 - 8 saat takması (tercihen uykuda), Tedavinin ortalama 1 - 4 hafta içinde sonlandırılması.&nbsp;</p>

    <p class="mt-4">İkinci yöntem ise klinikte bir hekim tarafından yapılan beyazlatmadır ki aşağıdaki şekilde uygulanır:</p>

    <p class="mt-4">Ağartıcı ilaç bu işlem hakkında deneyimi olan bir hekim tarafından diş üzerine yerleştirilir.&nbsp;</p>

    <p class="mt-4">İlgili dişin üzerine mavi renkli ışık kaynağı belli bir süre tutulur.&nbsp;</p>

    <p class="mt-4">İşlem bittiğinde sonuç hemen gözlenir.&nbsp;</p>

    <p class="mt-4">Her iki yöntemde etkin olmasına rağmen tercih, renklenmenin derecesine, tedavinin ne kadar çabuk sonlandırılmak istendiğine ve hekimin görüşüne bağlıdır.</p>

    <p class="mt-4"><strong>Dişlerde istenmeyen lekeler neden oluşur?</strong></p>

    <p class="mt-4">Bunun bir çok sebebi olabilir. En yaygın olanları; yaşlılık, dişleri boyayan maddelerin (kahve, çay, kola, sigara vb.) tüketimi, travmalar, eski protezler, kaplamalar, dolgulardır. Dişlerin oluşumu boyunca kullanılan antibiyotik (tetracycline) veya aşırı florit tüketimi de dişlerde renklenmelere yol açabilir.</p>

    <p class="mt-4">Bu durum dişin yapısından ileri gelebileceği gibi diş etkenlerin boyaması ile, gelişim çağında alınan antibiyotik ya da florür nedeni ile, yaşlılıkla, dişe gelen bir darbe nedeni ile de olabilir.</p>

    <p class="mt-4"><strong>Bleaching (Beyazlatma) işlemi kimlere uygulanabilir?</strong></p>

    <p class="mt-4">Hemen hemen herkese! Ancak, tedavinin etkili olamayacağı bazı durumlar vardır. Dişhekiminiz tam bir ağız içi kontrol ve teşhisi ile dişlerin bu işlem için uygun olup olmadığını belirleyecektir. Dişleriniz sağlıklıysa daha beyaz ve doğal gülümseme için ideal bir çözümdür.</p>

    <p class="mt-4">Ağız sağlığı teknolojisindeki ilerlemeler sayesinde dişleriniz çok kısa bir sürede, güvenli ve etkin olarak beyazlatılabilmektedir.</p>

    <p class="mt-4">Yapılan araştırmalara göre, dişlerin beyazlatılması dişhekiminizin gözetimi altında yapılırsa son derece etkin ve güvenlidir. Dişler ve dişetleri hiçbir şekilde zarar görmez.</p>

    <p class="mt-4"><strong>Uygulama süresi ne kadardır?</strong></p>

    <p class="mt-4">Genelde, ilk uygulamada beyazlama başlar. Ancak, ideal görüntüye ulaşmak için, uygulamanın tekrarlanması gerekebilir.</p>

    <p class="mt-4"><strong>Dişler beyazladıktan sonra eski haline döner mi?</strong></p>

    <p class="mt-4">Dişler her zaman için eskisinden daha beyaz olacaktır. Ancak, hastaların alışkanlık ve ağız bakımına bağlı olarak yılda bir – iki kez pekiştirme tedavisi gerekebilir.</p>

    <p class="mt-4"><strong>Bleaching (Diş Beyazlatma) Yöntemleri</strong></p>

    <p class="mt-4">Diş beyazlatma (bleaching) metotları üç ana grupta toplanır:</p>

    <p class="mt-4">1) &nbsp; &nbsp;Kimyasal Bleaching (Diş Beyazlatma)</p>

    <p class="mt-4">2) &nbsp; &nbsp;Fototermal Bleaching (Diş Beyazlatma)</p>

    <p class="mt-4">3) &nbsp; &nbsp;Fotokimyasal Bleaching (Diş Beyazlatma)</p>

    <p class="mt-4"><strong>Kimyasal Bleaching (Diş Beyazlatma)</strong></p>

    <p class="mt-4">Bu teknikte, diş beyazlatıcı jel, özel olarak yapılmış diş kalıpları yardımıyla dişlere uygulanır. Ancak kimyasal diş beyazlatma tekniğinin diş minesine bir miktar olumsuz etkisinin olabileceği unutulmamalıdır. Çeşitli kozmetik ürünler arasında da satılabilen bu kimyasallar mutlaka bir dişhekimi gözetiminde kullanılmalıdır.</p>

    <p class="mt-4"><strong>Fototermal Bleaching (Diş Beyazlatma)</strong></p>

    <p class="mt-4">Bu yöntemde de yine bir miktar özel bir jel kullanılır. Ancak önceki metottan farklı olarak yüksek enerjili özel bir ışın demeti yardımıyla uygulanır. Işık kaynağı bir seri LED veya diyot-lazer den oluşabilir. Yine bu yöntemde de muhtemel olumsuz etkilerin olabileceğinden mutlaka dişhekimi gözetiminde yapılmalıdır.</p>

    <p class="mt-4"><strong>Fotokimyasal Bleaching (Diş Beyazlatma)</strong></p>

    <p class="mt-4">Bu diş &nbsp;beyazlatma yönteminde, beyazlatma jeli bir UV-lamba (mavi ışık) veya bir KTP lazeri (yeşil ışık) kullanılarak aktive edilir. Bu metodu diğerlerinden ayıran özellik ise kullanılan ışık kaynağının da ayrıca dişi beyazlatıcı etkisinin olmasıdır (foto oksidasyon). Bu uygulama, dişler üzerinde daha derin bir beyazlatma sağlar. UV-Işık kullanırken çevre dokular (dudaklar, dişetleri, dil vb.) muhtemel yanık yaralanmalarına karşı iyi korunmalıdır. KTP lazeri kullanırken ise yanma riski yoktur, ancak dişetleri beyazlatma jelinin sızıntılarına karşı korunmalıdır (gingiva block). KTP lazeri ile beyazlatmanın büyük bir avantajı da; geniş bilimsel araştırmalar sonucunda diş minesi üzerinde yan etkilerinin gözlenmemiş olmasıdır. Diş beyazlatma işlemi sonrasında yapılacak florid uygulanması diş minelerini güçlendirir ve çürümeleri önler.</p>

    <p class="mt-4"><strong>Beyazlatılan dişler ne kadar süre beyaz kalır?</strong></p>

    <p class="mt-4">Farklı diş beyazlatma (bleaching) metotlarıyla beyazlatılan dişler bir kaç yıl beyaz kalır. Fakat bu süre kişiden kişiye değişir. Yeme-içme alışkanlıkları, sigara ve fırçalama alışkanlığı dişlerin beyaz kalma süresini etkiler.</p>

    <p class="mt-4">Şu unutulmamalıdır ki, bleaching her zaman istediğiniz beyazlığı sağlamayabilir. Beyazlama oranı dişlerinizin beyazlatma işlemi uygulanmadan önceki tonuna bağlıdır ve kişiden kişiye değişir. Bu yüzden diş hekiminiz ile beklentilerinizi önceden konuşmalısınız.</p>

    <p class="mt-4">Diş Beyazlatma veya diş ağartma, genel dişhekimliğinde çokça uygulanan bir işlem olmasına rağmen aslına Estetik/Kozmetik Dişhekimliğinin alanıdır. Çok kimse beyaz dişlerle yapılan bir gülüşü çok çekici bulur. Genelde süt dişleri, erişkinlik dişlerinden daha beyazdır. Kişi yaşlandıkça dişlerinin rengi de zamanla daha koyulaşır. Bu koyulaşma diş minelerinin mineral yapısındaki değişimden kaynaklanır. Dişler ayrıca, bakteri pigmentleri ve tütün kullanımından kaynaklanan renklenmelere de maruz kalabilir.</p>

    <p class="mt-4">Beyaz dişler, gençlikle özdeşleştirildiğinden estetik görünümlü olmak isteyen kişiler tarafından oldukça arzulanırlar. Ancak şunu belirtmeliyiz ki, abartılı bir beyazlık çoğu durumda estetik olmayabilir. Her zaman için yüz ve ağız yapınıza uygun düşen doğal ton daha estetik olacaktır.</p>































    {{-- <p class="font-bold mt-2">Bleaching (Diş Beyazlatma) işlemi nedir ve nasıl yapılır?</p>
    <p class="mt-4">Beyazlatma dişlerin yapısında (mine ve dentin tabakasında) oluşan renklenmeleri giderme işlemidir. Şu anda bilinen iki değişik beyazlatma yöntemi vardır. Bunlardan ilki hastanın kendi başına uygulayabileceği bir yöntemdir, aşamaları şöyledir:</p>
    <p class="mt-4">Hekimin ağızdan ölçü alıp, dişlerinizin üzerine takabileceğiniz ince lastik kalıpları hazırlatması, Hastanın kendisi için hazırlanmış özel kalıbın içerisine ilaç yerleştirerek bu kalıbı beyazlatılacak dişlerin üstüne günde en az 6 - 8 saat takması (tercihen uykuda), Tedavinin ortalama 1 - 4 hafta içinde sonlandırılması. </p>
    <p class="mt-4">İkinci yöntem ise klinikte bir hekim tarafından yapılan beyazlatmadır ki aşağıdaki şekilde uygulanır:</p>
    <p class="mt-4">Ağartıcı ilaç bu işlem hakkında deneyimi olan bir hekim tarafından diş üzerine yerleştirilir. </p>
    <p class="mt-4">İlgili dişin üzerine mavi renkli ışık kaynağı belli bir süre tutulur. </p>
    <p class="mt-4"></p> --}}



    </p>

</div>













@include('layouts.footer')

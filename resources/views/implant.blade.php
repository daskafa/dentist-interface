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
            <h3 class="text-4xl font-bold text-white">Implant</h3>
        </div>
    </div>
    <p class="my-6">
    <p class="mt-4"><strong>İmplant</strong>, eksik olan dişlerin fonksiyon ve estetiğini tekrar sağlamak amacıyla çene kemiğine yerleştirilen ve uygun malzemeden yapılan yapay diş köküdür.</p>

    <p class="mt-4"><strong>İmplantlar</strong>&nbsp;eksik dişlerin tamamlanması için çene kemiğine yerleştirilen titanyum yapay diş kökleridir. İsveç'li bir bilim adamı olan Prof. Dr. Per İngvar Branemark çağdaş implantolojinin ilk örneklerini, insan ağızlarında, 1960'larda uygulamaya başlamıştır.&nbsp;&nbsp;</p>

    <p class="mt-4"><strong>İmplantlar&nbsp;</strong>küçük bir cerrahi girişimle çene kemiğine yerleştirilir. Ortalama 3 ay sonra implantın etrafını yoğun ve sağlam bir kemik sararak, sıkı bir şekilde çene kemiği içinde oturmasını sağlar.&nbsp;<strong>İmplant</strong>lara kron, köprü ve hareketli diş protezleri uygulanarak klasik tedavide karşılaşılan bir çok problem ortadan kaldırılır. Örneğin tek diş eksikliğini gidermek için boşluğun heriki yanındaki sağlam dişlerin kesilmesi ile yapılan klasik köprü yöntemi yerine bu boşluğun implantla doldurulması çok daha estetik ve sağlıklı sonuçlar ortaya çıkarır.&nbsp;</p>

    <p>Tek&nbsp;<strong>diş</strong>&nbsp;uygulamalarında en önemli yenilik, özellikle üst çene ön bölgede&nbsp;<strong>estetik</strong>&nbsp;beklentiler göz önüne alınarak, implant yapıldığı gün üst yapının, yani porselen kuronun da gerçekleştirilmesi.&nbsp;</p>

    <p class="mt-4"><strong>İmplant Kimlere Yapılabilir?</strong></p>

    <p>Ağzındaki diş eksikliklerinin giderilmesini isteyen ve bazı kriterlere sahip olan herkese&nbsp;<strong>implant</strong>&nbsp;yapılabilir. Bu kriterlerden biri eksik diş veya dişlerin olduğu bölgedeki kemiğin durumudur. İmplantın sağlam ve sağlıklı olarak yerleşip tutunabilmesi için bu bölgede yeterli kemik yüksekliği bulunmalıdır. Ayrıca hastanın ağız bakımı iyi olmalı, dişeti problemleri ve iyileşmeyi olumsuz etkileyecek bir rahatsızlığı bulunmamalıdır.</p>

    <p class="mt-4"><strong>İmplant Hakkında Daha Ayrıntılı Bilgi Almak İçin Kime Başvurmalısınız?</strong></p>

    <p>Bunun için diş hekiminiz en uygun kişidir. Eğer&nbsp;<strong>implant</strong>&nbsp;yaptırmaya karar verirseniz diş hekiminiz uygun olup olmadığınızı saptadıktan sonra sizi yönlendirecektir. İmplant yerleştirilmesi cerrahi bir işlemdir.</p>

    <p>Yaşam tarzı değiştikçe eksik dişlerin restorasyonunun genel vücut sağlığımız içinde önemi artmaktadır. Hareketli protezler bazı sorunlara yol açabilir. Bazı hastalar hareketli protezlerle rahat çiğneyememekten ve estetik sorunlardan şikayet ederler. İmplant sayesinde eksik dişler hem fonksiyon hem estetik açıdan en uygun şekilde tamamlanabilir.&nbsp;</p>

    <p class="mt-4"><strong>İmplant Yerleştirildikten Sonra Protez Ugulaması</strong></p>

    <p>Genellikle uygulanan prosedür&nbsp;<strong>implant</strong>&nbsp;yerleştirildikten sonra kemikle kaynaşması için protez yapılmadan önce 3 ay beklenmesidir. Ancak kemiğin iyileşme potansiyeli bireyden bireye değiştiği için bu sürenin hastanın yaşı, sağlık durumu ve implant yerleştirildiği bölgeye göre saptanması uygundur.</p>

    <p class="mt-4"><strong>İmplant Yerleştirilerken veya Daha Sonra Ağrı?</strong></p>

    <p>Normal cerrahi prosedürde implant lokal anestezi altında yerleştirilir ve işlem ağrılı olmaz. Ancak 3 - 4 saat sonra anestezinin etkisi geçtiğinde bir rahatsızlık hissedebilirsiniz. Rahatsızlığın şiddeti hastadan hastaya değişir ancak bir çok hastada çok önemli bir şikayet olmamaktadır. Bazı hastalarda operasyonu takip eden birkaç gün değişik şiddette ağrı görülür. Şişme, veya bölgede renk değişikliği de görülebilir.</p>

    <p class="mt-4"><strong>İmplantlar Çene Kemiğine Bağlanırken Dişsiz mi Kalmak Zorundayım?</strong></p>

    <p>Normal prosedür implant yerleştirildikten 2 hafta sonrasına kadar hastanın&nbsp;<strong>protez diş</strong>&nbsp;kullanmamasıdır. Ancak günümüzde her hasta ayrı bir vaka olarak değerlendirilmekte ve uygun durumlarda hastalara daimi protezin yapılmasına kadar implant üzerine basınç gelmeyecek şekilde planlanmış geçici&nbsp;<strong>protez diş</strong>&nbsp;yapılmaktadır.</p>

    <p class="mt-4"><br>
    <strong>İmplantlarda Neden Titanyum Kullanılıyor?</strong></p>

    <p>Titanyum kemikle bağlanması çok iyi olan ve doku tarafından kabul edilirliği en yüksem materyaldir. Yerleştirildikten sonra vücudun bir parçası haline gelir. Bu da implanta maksimum dayanıklığı sağlar.</p>

    <p class="mt-4"><strong>İmplant Uygulamasından Sonra Neler Yiyebilirim?</strong></p>

    <p>Yerleştirilen implantın aşırı yükten korunması için daha yumuşak besinler ve sıvı gıdalarla beslenmeniz gerekebilir. Bu konuda gerekli uyarılar diş hekiminiz yapacaktır.&nbsp;</p>

    <p class="mt-4"><br>
    <strong>Bir garanti verilebilir mi?&nbsp;</strong><br>
    Yapılan bilimsel çalışmalarda&nbsp;<strong>implant</strong>&nbsp;başarısının %90-100 arasında değiştiği gösterilmiştir. Ancak her tür tıbbi müdahalede olduğu gibi implantlar için de garanti vermek mümkün değildir.</p>

    <p class="mt-4"><br>
    <strong>İmplant Pahalı bir tedavi midir?&nbsp;</strong></p>

    <p class="mt-4"><strong>İmplant uygulamaları</strong>&nbsp;bir dizi karmaşık ve uzun süreli işlemleri gerektirir. Dolayısıyla rutin diş hekimi hizmetlerinden daha yüksek bir harcama gerektirirler.&nbsp;<strong>İmplant tedavileri</strong>&nbsp;tamamlanan hastalarda yapılan bir araştırmada, hastalar yaptıkları yatırımın karşılığını aldıklarını ve gerekirse aynı şeyi tekrar yaptıracaklarını belirtmişlerdir.</p>

    <p class="mt-4"><br>
    <strong>İMPLANT UYGULAMASININ AŞAMALARI</strong></p>

    <p class="mt-4"><strong>1- Ön Hazırlık :</strong>&nbsp;Öncelikle implantı yerleştirecek uzman tarafından durumunuzun implant için elverişli olup olmadığı incelenir. İmplant eksik diş ya da dişlerin yerine konmasında çok rahat bir çözüm olmasına rağmen her hastada uygulanması mümkün değildir.</p>

    <p class="mt-4"><strong>2- Detaylı İnceleme :</strong>&nbsp;İlk incelemenin ardından radyolojik incelemeler de yapılır. Çoğu zaman için yerleştirilecek implant için panoramik ve periapikal röntgen yeterli olur . Bazı durumlarda CT ( computerize tomografi ) çekilmesi gerekebilir . İmplant yerleştirildikten sonra uygulanacak tedavi planlanır. Eğer ağzınızda kendi dişleriniz varsa bu dişler incelenir gerekiyorsa tedavileri yapılır. Ağız hijyeni sağlanır ve dişeti sorunları varsa implantın yerleştirilmesinden önce giderilir.</p>

    <p class="mt-4"><strong>&nbsp;3- Operasyon-İmplantın Yerleştirilmesi :</strong>&nbsp;Bu aşamada titanyum implant vidaları çene kemiği içinde açılan yuvaya yerleştirilir. Bu işlem lokal anestezi altında yapılan cerrahi bir işlemdir ve yaklaşık bir saat kadar sürer.</p>

    <p class="mt-4"><strong>4- implant İyileşme Süreci&nbsp;</strong>: Bu aşamada implantın çene kemiğine kaynaşması beklenir. İyileşme&nbsp;3 ay kadar sürer. Ancak bu süre kemiğin yapısı ve iyileşme potansiyeline bağlı olarak kişiden kişiye değişebilir.</p>

    <p class="mt-4"><strong>&nbsp;5- İmplant Uygulama -Dayanağın Yerleştirilmesi :</strong>&nbsp;Titanyum vida çene kemiğine bağlandıktan sonra proteze dayanak olacak parça yerleştirilir. Bu parçaya "abutment" denir. Bu uygulama çok daha kolay ve kısadır. Yerleştirilen implant kök vazifesi görür , ve üzerine yapılan abutment alt yapı vazifesi görür .&nbsp;</p>

    <p class="mt-4"><strong>&nbsp;6- İyileşme Süreci :</strong>&nbsp;Yaklaşık 1 hafta süren kısa bir iyileşme sürecinin ardından implant tedavisinin üst yapısının yani protezinin yapımına geçilebilir .</p>

    <p class="mt-4"><strong>&nbsp;7- Protetik Tedavi- Protezin Yapılması :</strong>&nbsp;Yerleştirilen implant vidası ve abutment yapılacak protez için bir alt yapı oluşturur ve protez planlandığı şekilde uygulanır. Böylece eksik dişleriniz tamamlanmış olur ve tedaviniz sona erer.&nbsp;</p>

    <p class="mt-4"><strong>KEMİK GREFTLERİ:</strong></p>

    <p class="mt-4"><strong>İmplant</strong>&nbsp;uygulamalarında her zaman çenelerde uygun miktarda kemik hacmi ve yoğunluğu ile karşılaşılmaz. Bu durumda kemik nakilleri veya kemik arttırma tekniklerine başvurulur. Çene cerrahisindeki gelişmelerin en önemlilerinden biri de bu uygulamaların kolaylaşması, hızlanması ve güvenliğinin artmasıdır.&nbsp;</p>


















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

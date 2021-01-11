require('./bootstrap');

// import Swiper JS
import Swiper, { Navigation, Pagination } from 'swiper';
Swiper.use([Navigation, Pagination]);

var mySwiper = new Swiper('.s1', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
    spaceBetween: 30,
    autoplay: 4000,
    slidesPerView: 4,
    breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        3000: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      }
})

var myRadios = document.getElementsByName('tabs2');
      var setCheck;
      var x = 0;
      for(x = 0; x < myRadios.length; x++){
          myRadios[x].onclick = function(){
              if(setCheck != this){
                   setCheck = this;
              }else{
                  this.checked = false;
                  setCheck = null;
          }
          };
      }


      $(document).ready(function () {
        $("#mobile-menu-open").click(function () {
            $("#mobile-menu").fadeToggle("slow", "linear");
        });
        $("#mobile-menu-close").click(function () {
            $("#mobile-menu").fadeToggle("slow", "linear");
        });

        $(".tek-link a").click(function () {
            $(".mobile-menu").css("display", "none");
        });
    });

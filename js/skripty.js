      /* Když uživatel klikne na buttom (hamburger) rozjede se menu */
      $('.fa-bars').on('click',function(){
        $('.menu-polozky').slideToggle(280);
      });
      /* Když se okno zvětší nad 768 pixelů, zobrazí se znovu automaticky */
      $(window).on("resize", function () {
        if ($(window).width() > 768) {
            $('.menu-polozky').css('display','');
        }
    }).resize();

      /* Swiper */
      var swiper = new Swiper(".swiper-container", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 2500,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });

      /* Top button */

      window.scroll({
          top: 0, 
          left: 0, 
          behavior: 'smooth'
        });

        var mybutton = document.getElementById("myBtn");

        // Když uživatel odscrolluje dolu 20px ze shora dokumentu, ukáže se button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        /* Konec Top button */

        // login panel ------>
        var login = document.getElementById('loginbutton');

        // Když uživatel klikne kamkoli, tak se login panel zavře
        window.onclick = function(event) {
          if (event.target == login) {
            login.style.display = "none";
          }
        }

        /* Sticky- přilnavé horní menu při scrollování dolu */

        $(document).ready(function() {
             
             // Funkce která rozhodne, zda je třeba aby byla navigace "fixnutá" nebo ne
             var stickyNav = function(){
              var scrollTop = $(window).scrollTop(); // our current vertical position from the top
                   
              // Pokud jsme odcrollovali níže, změní se na "fixed" a připne se k hořejšku stránky, 
              // když ne, stane se opět "relative"
              if (scrollTop > 250) { 
                  $('.stickymenu').addClass('sticky');
                  $('.logomenu').addClass('logosticky');
                  $('.vycpi').addClass('vycpavka');
                
              } else {
                  $('.stickymenu').removeClass('sticky'); 
                  $('.logomenu').removeClass('logosticky');
                  $('.vycpi').removeClass('vycpavka');
              }
          };
    
          stickyNav();
          // Spuštění po každém odscrollování
          $(window).scroll(function() {
            stickyNav();
          });
        });

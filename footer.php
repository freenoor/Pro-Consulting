<footer><div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 services">
                <?php dynamic_sidebar('widget-5');?>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <?php dynamic_sidebar('widget-7');?>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 links">
                <?php dynamic_sidebar('widget-6');?>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container"> 
            <div class="copyright">
                <?php dynamic_sidebar('widget-9');?>
            </div>
        </div>
    </div>
</footer>

<script>
  jQuery("#wrapper").click(function(){
  jQuery(".icon").toggleClass("close");
  });

  var swiper = new Swiper('.swiper-container2', {
    slidesPerView: 1,
    spaceBetween: 30,
	  initialSlide: 1,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
    },
    breakpoints: {
     650: {
        slidesPerView: 2,
        spaceBetween: 15,
        centeredSlides: false,
      },
      991.98: {
        slidesPerView: 3,
        centeredSlides: false,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      }
    });

    var swiper = new Swiper('.swiper-container-partner', {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    autoplay: true,
    grabCursor: true,
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    breakpoints: {
      575.98: {
        slidesPerView: 3,
      },
      991.98: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 4,
      },
      }
    });

    var galleryThumbs = new Swiper('.swiper-container3', {
      slidesPerView: 2,
      spaceBetween: 0,
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      allowTouchMove: false,
      pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
      },
      thumbs: {
      swiper: galleryTop
      },
      breakpoints: {
        375.98: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      470: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      575.98: {
        slidesPerView: 3,
      },
      767.98: {
        slidesPerView: 3,
      },
      991.98: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      }
    });
    var galleryTop = new Swiper('.swiper-container4', {
      speed: 400,
      spaceBetween: 50,
      loop: true,
      pagination: {
      clickable: true,
      el: '.swiper-pagination',
      type: 'bullets',
      dynamicBullets: true,
      },
      thumbs: {
      swiper: galleryThumbs
      }
      });

    var swiper = new Swiper('.swiper-container99', {
      loop: true,
      fadeEffect: { 
        crossFade: true,
      },
      virtualTranslate: true,
      autoplay: {
      delay: 2500,
      disableOnInteraction: true,
      },
      speed: 1000, 
      effect: "fade"
    });

    jQuery(window).scroll(function() {
      var scrollDistance = jQuery(window).scrollTop();
      jQuery('section').each(function(i) {
      if (jQuery(this).position().top <= scrollDistance) {
      jQuery('.menu-here .navbar #navbarNav ul .menu-item a.active').removeClass('active');
      jQuery('.menu-here .navbar #navbarNav ul .menu-item a').eq(i).addClass('active');
      }
      });
      }).scroll();

      jQuery(function () {
      jQuery(document).scroll(function () {
      var $nav = jQuery(".menu-here");
      $nav.toggleClass('scrolled', jQuery(this).scrollTop() > $nav.height());
    });
    });

    jQuery(".number").counterUp({
        time: 1000
    });
</script>
<?php wp_enqueue_style( 'dashicons' ); ?>
<?php wp_footer();?>
</body>
</html>
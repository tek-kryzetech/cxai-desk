(function ($) {
  "use strict";

// Preloader Start
  $(window).on('load',function () {
    $('#preloader_status').fadeOut();
    $('#preloader')
      .delay(350)
      .fadeOut('slow');
      $('body')
      .delay(350)
  });
// Preloader End



  //Run function when document ready
  $(document).ready(function () {
    init_menu_toggle();
  });

  //  menu mobile
  function init_menu_toggle() {
    $(".menu-icon").click(function () {
      $(this).toggleClass("menu-icon-design");
      $(".header-menu").toggleClass("show-menu");
    });

    $(".header-menu li a").click(function () {
      $(".header-menu").removeClass("show-menu");
      $(".menu-icon").removeClass("menu-icon-design");
    });

  }
    window.init_menu_toggle = init_menu_toggle;
  // scroll fix menu

  $(window).on("scroll", function () {
    init_menu_scroll();
    init_hero_scroll();
  });

  function init_menu_scroll() {
    var header = $(".header");
    var scroll = $(window).scrollTop();
    if (scroll >= 300) {
      header.addClass("header-fixed");
    } else {
      header.removeClass("header-fixed");
    }
  }
    window.init_menu_scroll = init_menu_scroll;
  // hero area class name add

  function init_hero_scroll() {
    var header = $(".all-top");
    var scroll = $(window).scrollTop();
    if (scroll >= 300) {
      header.addClass("padding-top");
    } else {
      header.removeClass("padding-top");
    }
  }
    window.init_hero_scroll = init_hero_scroll;
  // user slider

  $(".user-box").owlCarousel({
    autoplay: true,
    margin: 20,
    responsiveClass: true,
    autoplayTimeout: 7000,

    responsive: {
      0: {
        items: 1,
      },

      600: {
        items: 1,
      },

      1024: {
        items: 2,
      },

      1366: {
        items: 2,
      },
    },
  });

  // Password field

  $("#showPassword").on("click", function () {
    $(this).children().toggleClass("mdi-eye-outline");
    let input = $(this).prev();
    input.attr("type", input.attr("type") === "password" ? "text" : "password");
  });

    $("#showPassword2").on("click", function () {
        $(this).children().toggleClass("mdi-eye-outline");
        let input = $(this).prev();
        input.attr("type", input.attr("type") === "password" ? "text" : "password");
    });


})(jQuery);

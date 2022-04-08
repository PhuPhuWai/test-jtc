jQuery(function ($) {
  /* =========================================
   *  Top Button
   * ========================================= */
   $(function () {
    $(window).scroll(function () {
      var winTop = $(this).scrollTop();
      //footer
      if (winTop > 200) {
        $(".pagetop").fadeIn(1000);
      } else {
        $(".pagetop").fadeOut(1000);
      }
      if (winTop + $(window).height() < $("#footer").offset().top) {
        $(".pagetop").addClass("fixed");
      } else {
        $(".pagetop").removeClass("fixed");
      }
    });
    $(document).on("click", ".pagetop", function () {
      $("html, body").animate({ scrollTop: 0 }, 800);
      return false;
    });
  });
   /* ========================================= */

  /* =========================================
   *  Menu Effect PC
   * ========================================= */
   $(function () {
    $(document).on("click", ".menu", function () {
      $(".gmenu").addClass("is-active");
      $(".nav").addClass("open");
    });

    $(document).on("click", ".is-active", function () {
      $(".gmenu").removeClass("is-active");
      $(".nav").removeClass("open");
    });
  });
   /* ========================================= */

  /* =========================================
   *  Menu Effect SP
   * ========================================= */
   $(function () {
    $(document).on("click", ".menu-sp", function () {
      $(".gmenu-sp").addClass("is-active");
      $(".nav-sp").addClass("open");
    });

    $(document).on("click", ".is-active", function () {
      $(".gmenu-sp").removeClass("is-active");
      $(".nav-sp").removeClass("open");
    });

    $(".sub-anchor").click(function () {
      $(".gmenu-sp").removeClass("is-active");
      $(".nav-sp").removeClass("open");
    });
  });
   /* ========================================= */

  /* =========================================
   *  MV Height
   * ========================================= */
   $(function () {
    $my_w = $(window).width();
    if ($my_w <= 768) {
      // var agent = navigator.userAgent;
      var viewportHeight = window.innerHeight;
      $("#sec-top .mv-height").css({ height: viewportHeight });
    } else {
      $("#sec-top .mv-height").css({ height: "100vh" });
    }
  });
   /* ========================================= */

  /* =========================================
   *  Scroll Anchor
   * ========================================= */
   $(function () {
    var scroll_func = function () {
      $("html,body").animate(
        { scrollTop: $($(this).attr("href")).offset().top },
        "slow",
        "swing"
        );
      return false;
    };
    $(function () {
      $(".anchor").click(scroll_func);
    });
  });
   /* ========================================= */

  /* =========================================
   *  MV Height
   * ========================================= */
   $(function () {
    $my_w = $(window).width();
    if ($my_w <= 768) {
      // var agent = navigator.userAgent;
      var viewportHeight = window.innerHeight;
      $("#sec-top .mv-bg").css({ height: viewportHeight });
    } else {
      $("#sec-top .mv-bg").css({ height: "100vh" });
    }
  });
   /* ========================================= */

  /* =========================================
   *  After Scroll  Background and img change
   * ========================================= */

  //ページトップの出現
  $(window).scroll(function () {
    var $nav = $(".header-div");
    if ($(window).scrollTop() > $nav.height()) {
      //nav fixed and change color
      $(".head-m").addClass("main-header-fixed");
      //logo
      $(".h-logo-w").css("display", "none");
      $(".h-logo-g").css("display", "block");
      //down icon
      $(".down-icon-w").css("display", "none");
      $(".down-icon-b").css("display", "block");
      //facebook
      $(".facebook-w").css("display", "none");
      $(".facebook-b").css("display", "block");
      //twitter
      $(".twitter-w").css("display", "none");
      $(".twitter-b").css("display", "block");
      //youtube
      $(".youtube-w").css("display", "none");
      $(".youtube-b").css("display", "block");
      //change color li
      $(".nav-div li a").addClass("font-co");
      //nav-color
      $(".menu-sp span").removeClass("nav-color-w");
      $(".menu-sp span").addClass("nav-color-g");
    } else {
      //nav fixed and change
      $(".head-m").removeClass("main-header-fixed");
      //logo
      $(".h-logo-w").css("display", "block");
      $(".h-logo-g").css("display", "none");
      //down iocn
      $(".down-icon-w").css("display", "block");
      $(".down-icon-b").css("display", "none");
      //facebook
      $(".facebook-w").css("display", "block");
      $(".facebook-b").css("display", "none");
      //twitter
      $(".twitter-w").css("display", "block");
      $(".twitter-b").css("display", "none");
      //youtube
      $(".youtube-w").css("display", "block");
      $(".youtube-b").css("display", "none");
      //change color li
      $(".nav-div li a").removeClass("font-co");
      //nav-color
      $(".menu-sp span").addClass("nav-color-w");
      $(".menu-sp span").removeClass("nav-color-g");
    }
  });
});

$(document).ready(function () {
  $(".down-arr").hover(
    function () {
      $(".head-m").addClass("main-header-fixed");
      //logo
      $(".h-logo-w").css("display", "none");
      $(".h-logo-g").css("display", "block");
      //down icon
      $(".down-icon-w").css("display", "none");
      $(".down-icon-b").css("display", "block");
      //facebook
      $(".facebook-w").css("display", "none");
      $(".facebook-b").css("display", "block");
      //twitter
      $(".twitter-w").css("display", "none");
      $(".twitter-b").css("display", "block");
      //youtube
      $(".youtube-w").css("display", "none");
      $(".youtube-b").css("display", "block");
      //change color li
      $(".nav-div li a").addClass("font-co");
      //sub menu
      // $(".sub-menu").css("display", "block");
    },
    //else
    function () {

      $(".nav-div li a").removeClass("font-co");

    }
    );
});

$(function () {
  var eTop = $("body").offset().top; //get the offset top of the element
  //alert(eTop);
  if (eTop == 0) {
    $(".down-arr").hover(
      function () {
        $(".head-m").addClass("main-header-fixed");
      },
      function () {
        $(".head-m").removeClass("main-header-fixed");
        //logo
        $(".h-logo-w").css("display", "block");
        $(".h-logo-g").css("display", "none");
        // //down icon
        $(".down-icon-w").css("display", "block");
        $(".down-icon-b").css("display", "none");
        // //facebook
        $(".facebook-w").css("display", "block");
        $(".facebook-b").css("display", "none");
        // //twitter
        $(".twitter-w").css("display", "block");
        $(".twitter-b").css("display", "none");
        // //youtube
        $(".youtube-w").css("display", "block");
        $(".youtube-b").css("display", "none");

        //change color li
        $(".nav-div li a").removeClass("font-co");
      }
      );
  }
});

$(window).scroll(function () {
  var $nav = $(".header-div");
  if ($(window).scrollTop() > $nav.height()) {
    $(".down-arr").hover(
      function () {
        $(".head-m").addClass("main-header-fixed");
        //logo
        $(".h-logo-w").css("display", "none");
        $(".h-logo-g").css("display", "block");
        //down icon
        $(".down-icon-w").css("display", "none");
        $(".down-icon-b").css("display", "block");
        //facebook
        $(".facebook-w").css("display", "none");
        $(".facebook-b").css("display", "block");
        //twitter
        $(".twitter-w").css("display", "none");
        $(".twitter-b").css("display", "block");
        //youtube
        $(".youtube-w").css("display", "none");
        $(".youtube-b").css("display", "block");
        //change color li
        $(".nav-div li a").addClass("font-co");
      }
      
      );
  } else {
    $(".nav-div li a").addClass("font-co");
  }
});

$(window).scroll(function () {
  var $nav = $(".header-div");
  if ($(window).scrollTop() == 0) {
    $(".down-arr").hover(
      function () {
        $(".head-m").addClass("main-header-fixed");
      },
      function () {
        $(".head-m").removeClass("main-header-fixed");
        //logo
        $(".h-logo-w").css("display", "block");
        $(".h-logo-g").css("display", "none");
        // //down icon
        $(".down-icon-w").css("display", "block");
        $(".down-icon-b").css("display", "none");
        // //facebook
        $(".facebook-w").css("display", "block");
        $(".facebook-b").css("display", "none");
        // //twitter
        $(".twitter-w").css("display", "block");
        $(".twitter-b").css("display", "none");
        // //youtube
        $(".youtube-w").css("display", "block");
        $(".youtube-b").css("display", "none");
        $(".nav-div li a").removeClass("font-co");
      }
      );
  }
});


$(document).ready(function () {
  $('.tog-click').click(function(){
    $(this).toggleClass("open");
    $('.detail').slideToggle('normal');
  });

});

$(document).ready(function () {
  $('.tog-click01').click(function(){
    $(this).toggleClass("open");
    $('.detail01').slideToggle('normal');
  });

});
$ = jQuery.noConflict();
console.log("hello");
//navgation menu
window.addEventListener("load", function () {
  $(".menu").on("click", function () {
    $(".menu__line").toggleClass("active");
    $(".gnav").fadeToggle();
  });

  // function display_exprenation(no) {
  //     if (no == "no1") {
  //         document.getElementById('chage_exprenation').innerHTML = "<p>Author</p>";
  //     } else if (no == "no2") {
  //         document.getElementById('chage_exprenation').innerHTML = "<p>Mentor</p>";
  //     } else if (no == "no3") {
  //         document.getElementById('chage_exprenation').innerHTML = "<p>Shison</p>";
  //     } else if (no == "no4") {
  //         document.getElementById('chage_exprenation').innerHTML = "<p>Social-parents</p>";
  //     }
  // }

  //animation top page

  //itemのinnerをセレクタに指定
  // var elem1 = $('.title-h1');
  var elem2 = $('.img-top');

  // elem1.each(function () {

  //   var isPlay = 'isPlay';

  //   var elemOffset = $(this).offset().top;
  //   var scrollPos = $(window).scrollTop();
  //   var wh = $(window).height();

  //   if (scrollPos > elemOffset - wh + (wh / 4)) {
  //     $(this).addClass(isPlay);
  //   }
  // });

  elem2.each(function () {

    var isPlay = 'isPlay';

    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if (scrollPos > elemOffset - wh + (wh / 4)) {
      $(this).addClass(isPlay);
    }
  });

  // top page animation
  $("#box1 .colorLayer1").animate({ left: "0px" }, 300);
  $("#box1 .colorLayer1").delay(400).animate({ left: "500px" }, 300);
  $("#box1 .title-h1").animate({ left: "0px" });

  $("#box2 .colorLayer1").delay(300).animate({ left: "0px" }, 300);
  $("#box2 .colorLayer1").delay(400).animate({ left: "500px" }, 300);
  $("#box2 .title-h1").delay(300).animate({ left: "0px" });

  $("#box3 .colorLayer1").delay(600).animate({ left: "0px" }, 300);
  $("#box3 .colorLayer1").delay(400).animate({ left: "500px" }, 300);
  $("#box3 .title-h1").delay(600).animate({ left: "0px" });

  TweenLite.to(".title-small p", 3.5, {
    opacity: 1,
    y: -10,
    delay: 1.0,
    ease: Expo.easeOut,
  })


  // slider
  if (this.document.getElementsByClassName("main-carousel").length) {
    var flkty = new Flickity(".main-carousel", {
      contain: true,
      asNavFor: ".carousel-display",
      freeScroll: true,
      imagesLoaded: true,
      wrapAround: true,
      cellAlign: "center",
      //autoPlay: 2000,
      prevNextButtons: true,
      pageDots: false,
      arrowShape: {
        x0: 10,
        x1: 60,
        y1: 50,
        x2: 65,
        y2: 45,
        x3: 20
      }
    });
  }

  //scrollify
  var option = {
    section: ".display-scroll",
    easing: "easeOutExpo",
    scrollSpeed: 1500,
    before: function () {
      //setCurrent();
    },
    after: function () { }
  };

  $(function () {
    $.scrollify(option);
  });

  //   function setCurrent(index = 0) {
  //     $section.removeClass("is-show");
  //     $section.eq(index).addClass("is-show");
  //   }
});

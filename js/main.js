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
  var elem1 = $('.img-top');
  elem1.each(function () {

    var isPlay1 = 'isPlay1';

    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if (scrollPos > elemOffset - wh + (wh / 4)) {
      $(this).addClass(isPlay1);
    }
  });

  var elem2 = $('.background-number1');
  elem2.each(function () {

    var isPlay2 = 'isPlay2';

    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if (scrollPos > elemOffset - wh + (wh / 4)) {
      $(this).addClass(isPlay2);
    }
  });


  var elem3 = $('.title-small');
  elem3.each(function () {

    var isPlay4 = 'isPlay4';

    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if (scrollPos > elemOffset - wh + (wh / 4)) {
      $(this).addClass(isPlay4);
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
  $("#box3 .title-h1 ").delay(600).animate({ left: "0px" });


  $(window).scroll(function () {
    // intro
    if ($(this).scrollTop() >= 310 && $(this).scrollTop() <= 350) {
      $("#box4 .colorLayer2").animate({ left: "0px" }, 300);
      $("#box4 .colorLayer2").delay(400).animate({ left: "500px" }, 300);
      $("#box4 .intro-h1").animate({ left: "0px" });

      $("#box5 .colorLayer2").delay(300).animate({ left: "0px" }, 300);
      $("#box5 .colorLayer2").delay(400).animate({ left: "500px" }, 300);
      $("#box5 .intro-h1").delay(300).animate({ left: "0px" });
      $(".colorLayer2").delay(400).animate({ width: "0px" }, 300);



      var elem4 = $('.exprenaiton-wrap ');
      elem4.each(function () {

        var isPlay5 = 'isPlay5';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        $(this).addClass(isPlay5);

      });

      var elem5 = $('.intro-small1 ');
      elem5.each(function () {

        var isPlay5 = 'isPlay5';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        $(this).addClass(isPlay5);

      });

      var elem6 = $(' .intro-video ');
      elem6.each(function () {

        var isPlay6 = 'isPlay6';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        $(this).addClass(isPlay6);

      });

      var elem7 = $(' .spinsroll  ');
      elem7.each(function () {

        var isPlay7 = 'isPlay7';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        $(this).addClass(isPlay7);

      });

      var elem8 = $(' .introBtns ');
      elem8.each(function () {

        var isPlay7 = 'isPlay7';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        $(this).addClass(isPlay7);

      });
    }

    //chaptersmain
    if ($(this).scrollTop() >= 810 && $(this).scrollTop() <= 900) {

      $("#box6 .colorLayer3").animate({ left: "0px" }, 300);
      $("#box6 .colorLayer3").delay(400).animate({ left: "500px" }, 300);
      $("#box6 .chapterIntro-h1").animate({ left: "0px" });
      $(".colorLayer3").delay(400).animate({ width: "0px" }, 300);

      var elem9 = $('.background-number3');
      elem9.each(function () {

        var isPlay9 = 'isPlay9';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();

        $(this).addClass(isPlay9);
      });

      var elem10 = $('.right_elements');
      elem10.each(function () {

        var isPlay9 = 'isPlay9';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();

        $(this).addClass(isPlay9);
      });

      var elem11 = $('.Slider');
      elem11.each(function () {

        var isPlay10 = 'isPlay10';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();

        $(this).addClass(isPlay10);
      });
    }


    if ($(this).scrollTop() >= 1710 && $(this).scrollTop() <= 1760) {
      $("#box7 .colorLayer4").animate({ left: "0px" }, 300);
      $("#box7 .colorLayer4").delay(400).animate({ left: "700px" }, 300);
      $("#box7 .chapterMain-h1").animate({ left: "0px" });
      $(".colorLayer4").delay(400).animate({ width: "0px" }, 300);

      var elem12 = $('.chapterMain-contents');
      elem12.each(function () {

        var isPlay11 = 'isPlay11';

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();

        $(this).addClass(isPlay11);
      });

    }
  });





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

  $(' .post_side ').hover(
    function () {
      $.scrollify.disable();
    },
    function () {
      $.scrollify.enable();
    }
  )

  //   function setCurrent(index = 0) {
  //     $section.removeClass("is-show");
  //     $section.eq(index).addClass("is-show");
  //   }
});


//Mentor slider
var $activeSlide = $(".active"),
  $homeSlide = $(".slide"),
  $slideNavPrev = $("#prev"),
  $slideNavNext = $("#next");


function init() {
  TweenMax.set($homeSlide.not($activeSlide), { autoAlpha: 0 });
  TweenMax.set($slideNavPrev, { autoAlpha: 0.2 });
}

init();

function goToNextSlide(slideOut, slideIn, slideInAll) {
  var tl = new TimelineLite(),
    slideOutContent = slideOut.find('.card__content'),
    slideInContent = slideIn.find('.card__content'),
    slideOutImg = slideOut.find('.card__img'),
    slideInImg = slideIn.find('.card__img'),
    index = slideIn.index(),
    size = $homeSlide.length;
  console.log(index);

  if (slideIn.length !== 0) {

    tl
      .set(slideIn, { autoAlpha: 1, className: '+=active' })
      .set(slideOut, { className: '-=active', opacity: '0' })
      .to(slideOutContent, 0.65, { y: '+=40px', ease: Power3.easeInOut }, 0)
      .to(slideOutImg, 0.65, { backgroundPosition: 'bottom', ease: Power3.easeInOut }, 0)
      .to(slideInAll, 1, { y: '-=100%', ease: Power3.easeInOut }, 0)
      .fromTo(slideInContent, 0.65, { y: '-=40px' }, { y: 0, ease: Power3.easeInOut }, "-=0.7")
      .fromTo(slideInImg, 0.65, { backgroundPosition: 'top' }, { backgroundPosition: 'bottom', ease: Power3.easeInOut }, "-=0.7")
  }

  TweenMax.set($slideNavPrev, { autoAlpha: 1 });

  if (index === size - 1) {
    TweenMax.to($slideNavNext, 0.3, { autoAlpha: 0.2, ease: Linear.easeNone });
  }
};

$slideNavNext.click(function (e) {
  console.log("clicked");
  e.preventDefault();

  var slideOut = $('.slide.active'),
    slideIn = $('.slide.active').next('.slide'),
    slideInAll = $('.slide');

  goToNextSlide(slideOut, slideIn, slideInAll);
});

function goToPreviousSlide(slideOut, slideIn, slideInAll) {
  var tl = new TimelineLite(),
    slideOutContent = slideOut.find('.card__content'),
    slideInContent = slideIn.find('.card__content'),
    slideOutImg = slideOut.find('.card__img'),
    slideInImg = slideIn.find('.card__img'),
    index = slideIn.index(),
    size = $homeSlide.length;

  if (slideIn.length !== 0) {

    tl
      .set(slideIn, { autoAlpha: 1, className: '+=active' })
      .set(slideOut, { className: '-=active', opacity: '0' })
      .to(slideOutContent, 0.65, { y: '-=40px', ease: Power3.easeInOut }, 0)
      .to(slideOutImg, 0.65, { backgroundPosition: 'top', ease: Power3.easeInOut }, 0)
      .to(slideInAll, 1, { y: '+=100%', ease: Power3.easeInOut }, 0)
      .fromTo(slideInContent, 0.65, { y: '+=40px' }, { y: 0, ease: Power3.easeInOut }, "-=0.7")
      .fromTo(slideInImg, 0.65, { backgroundPosition: 'bottom' }, { backgroundPosition: 'top', ease: Power3.easeInOut }, "-=0.7")
  }

  TweenMax.set($slideNavNext, { autoAlpha: 1 });

  if (index === 0) {
    TweenMax.to($slideNavPrev, 0.3, { autoAlpha: 0.2, ease: Linear.easeNone });
  }
};

$slideNavPrev.click(function (e) {
  e.preventDefault();

  var slideOut = $('.slide.active'),
    slideIn = $('.slide.active').prev('.slide'),
    slideInAll = $('.slide');

  goToPreviousSlide(slideOut, slideIn, slideInAll);
});






















$.ajax({
  url: 'https://randomuser.me/api/',
  dataType: 'json',
  success: function (data) {
    console.log(data);
    $(".testImg").attr("src", data.results[0].picture.medium);
    $(".testName").html(data.results[0].name.first);
    $(".testLocation").html(data.results[0].location.city);

  }
});
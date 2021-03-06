
$(function(){
  if($('body').is('.home-body')){
    /******* PARALLAX ******/
    function parallax(element, distance, speed){
      const item = document.querySelector(element);
      item.style.transform = 'translateY(' + distance * speed + 'px)';
    }
    
    window.addEventListener("scroll", function(){
      parallax(".naslovna__wrapper", window.scrollY, .2);
      parallax(".hero-title", window.scrollY, .5);
    });

    /******* GLIDER ******/
new Glider(document.querySelector(".glider"), {
  // `auto` allows automatic responsive
  // width calculations
  slidesToShow: 1,
  slidesToScroll: 1,

  // should have been named `itemMinWidth`
  // slides grow to fit the container viewport
  // ignored unless `slidesToShow` is set to `auto`
  itemWidth: undefined,

  // if true, slides wont be resized to fit viewport
  // requires `itemWidth` to be set
  // * this may cause fractional slides
  exactWidth: false,

  // speed aggravator - higher is slower
  duration: 0.5,

  // dot container element or selector
  dots: ".carousel__navigation",

  // arrow container elements or selector
  arrows: {
    prev: ".carousel__button--left",
    // may also pass element directly
    next: ".carousel__button--right",
  },

  // allow mouse dragging
  draggable: true,
  // how much to scroll with each mouse delta
  dragVelocity: 3.3,

  // use any custom easing function
  // compatible with most easing plugins
  easing: function (x, t, b, c, d) {
    return c * (t /= d) * t + b;
  },

  // event control
  scrollPropagate: false,
  eventPropagate: true,

  // Force centering slide after scroll event
  scrollLock: true,
  // how long to wait after scroll event before locking
  // if too low, it might interrupt normal scrolling
  scrollLockDelay: 150,

  // Force centering slide after resize event
  resizeLock: true,

  // Glider.js breakpoints are mobile-first
  // responsive: [
  //   {
  //     breakpoint: 1000,
  //     settings: {
  //       slidesToShow: 2,
  //       slidesToScroll: 2,
  //     },
  //   },
  // ],
});

/******* GLIDER - TRANSFORMATIONS ******/

new Glider(document.querySelector(".glider-transformations"), {
  // `auto` allows automatic responsive
  // width calculations
  slidesToShow: 2,
  slidesToScroll: 1,

  // should have been named `itemMinWidth`
  // slides grow to fit the container viewport
  // ignored unless `slidesToShow` is set to `auto`
  itemWidth: undefined,

  // if true, slides wont be resized to fit viewport
  // requires `itemWidth` to be set
  // * this may cause fractional slides
  exactWidth: false,

  // speed aggravator - higher is slower
  duration: 0.5,

  // dot container element or selector
  dots: ".carousel__navigation-trans",

  // arrow container elements or selector
  arrows: {
    prev: ".carousel__button--left-trans",
    // may also pass element directly
    next: ".carousel__button--right-trans",
  },

  // allow mouse dragging
  draggable: true,
  // how much to scroll with each mouse delta
  dragVelocity: 3.3,

  // use any custom easing function
  // compatible with most easing plugins
  easing: function (x, t, b, c, d) {
    return c * (t /= d) * t + b;
  },

  // event control
  scrollPropagate: false,
  eventPropagate: true,

  // Force centering slide after scroll event
  scrollLock: true,
  // how long to wait after scroll event before locking
  // if too low, it might interrupt normal scrolling
  scrollLockDelay: 150,

  // Force centering slide after resize event
  resizeLock: true,

  // Glider.js breakpoints are mobile-first
  // responsive: [
  //   {
  //     breakpoint: 1000,
  //     settings: {
  //       slidesToShow: 2,
  //       slidesToScroll: 2,
  //     },
  //   },
  // ],
});

  }
});

/******* NAVBAR ******/
let menu_toggle = document.querySelector(".menu-toggle");
let navbar = document.querySelector(".navbar");

menu_toggle.addEventListener("click", function () {
  navbar.classList.toggle("navbar-open");
  menu_toggle.classList.toggle("open");
});

let dropdown_toggle = document.querySelector('.dropdown-mobile');
let dropdown_menu = document.querySelector('.dropdown-menu-mobile');
dropdown_toggle.addEventListener('click', function(){
  dropdown_menu.classList.toggle('dropdown-open');
});

/*** SUBMENU ****/


/******* NAVBAR ZATVARANJE NA CLICK ******/
$(function () {
  $(".navbar__link").on("click touch", function () {
    $(".menu-toggle").click();
  });
});





/******* SELECTRIC ******/
// $(function () {
//   $("select").selectric();
// });

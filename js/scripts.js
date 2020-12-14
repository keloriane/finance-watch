const menu = document.getElementById("hamburger-menu");
const menuHandle = document.getElementById('menu-handler');
const menuDisplay = document.getElementById('menu-phone');
const searchBtn = document.getElementById('search-btn');
const inputSearch = document.getElementById("search-input");
const searchInput = document.getElementById("submit-btn");




menuHandle.addEventListener("click" , function(){


    menu.classList.remove("open");

})

menuDisplay.addEventListener('click' , function() {
    console.log("click");
    menu.classList.add('open')
    gsap.from(menu , .5 , {x:"100%" } )
})


const swiper = new Swiper('.swiper-container', {
    loop: true,
    direction: 'horizontal',
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 40,
        }
    }
})



const swiperTestimonial = new Swiper('.swiper-testimonials', {
    loop: true,
    direction: 'horizontal',
    slidesPerView: "auto",

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

})



/*
searchBtn.addEventListener("click" , function ( ) {
    console.log('listening')
    inputSearch.style.visibility = "visible"
    searchInput.style.visibility = "visible"
    gsap.from(inputSearch, .3 , { width:0 })
});
*/



$('body')
    .on('click', 'div.three button.btn-search', function(event) {
        event.preventDefault();
        var $input = $('div.three input');
        $input.focus();
        if ($input.val().length() > 0) {
            // submit form
        }
    })
    .on('click', 'div.four button.btn-search', function(event) {
        event.preventDefault();
        var $input = $('div.four input');
        $input.focus();
        if ($input.val().length() > 0) {
            // submit form
        }
    })
    .on('click', 'div.five button.btn-search', function(event) {
        event.preventDefault();
        var $input = $('div.five input');
        $input.focus();
        if ($input.val().length() > 0) {
            // submit form
        }
    })
    .on('click', 'div.six button.btn-search', function(event) {
        event.preventDefault();
        var $input = $('div.six input');
        $input.focus();
        if ($input.val().length() > 0) {
            // submit form
        }
    })
    .on('click', 'div.thirteen button.btn-search', function(event) {
        event.preventDefault();
        var $input = $('div.thirteen input');
        $input.focus();
        if ($input.val().length() > 0) {
            // submit form
        }
    })
    .on('click', 'div.fourteen button.btn-search', function(event) {
        event.preventDefault();
        var $input = $('div.fourteen input');
        $input.focus();
        if ($input.val().length() > 0) {
            // submit form
        }
    })
;
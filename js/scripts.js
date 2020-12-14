const menu = document.getElementById("hamburger-menu");
const menuHandle = document.getElementById('menu-handler');
const menuDisplay = document.getElementById('menu-phone');
const searchBtn = document.getElementById('search-btn');
const inputSearch = document.getElementById("search-input");
const searchInput = document.getElementById("submit-btn");




// menuHandle.addEventListener("click" , function(){
//
//
//     menu.classList.remove("open");
//
// })
//
// menuDisplay.addEventListener('click' , function() {
//     console.log("click");
//     menu.classList.add('open')
//     gsap.from(menu , .5 , {x:"100%" } )
// })


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
// searchBtn.addEventListener("click" , function ( ) {
//     console.log('listening')
//     inputSearch.style.visibility = "visible"
//     searchInput.style.visibility = "visible"
//     gsap.from(inputSearch, .3 , { width:0 })
// });

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


const swiper =  new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    }
})
searchBtn.addEventListener("click" , function ( ) {
    console.log('listening')
    inputSearch.style.visibility = "visible"
    searchInput.style.visibility = "visible"
    gsap.from(inputSearch, .3 , { width:0 })
})
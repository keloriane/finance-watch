const menu = document.getElementById("hamburger-menu");
const menuHandle = document.getElementById('menu-handler');
const menuDisplay = document.getElementById('menu-phone');


menuHandle.addEventListener("click" , function(){
    menu.classList.remove("open");

})

menuDisplay.addEventListener('click' , function() {
    console.log("click");
    menu.classList.add('open')
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
});
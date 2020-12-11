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

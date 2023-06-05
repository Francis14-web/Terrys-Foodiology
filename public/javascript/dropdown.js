const menuBurger = document.getElementById('burger');
const cancelBtn = document.getElementById('cancel')
const mobileBar = document.getElementById('mobile-bar')
const menuBody = document.getElementById('main-window')
const topNav = document.getElementById('top-nav')


menuBurger.addEventListener("click", () => {
    mobileBar.classList.remove('hidden')
    cancelBtn.classList.remove('hidden')
    menuBurger.classList.add('hidden')
    mobileBar.classList.add('animate-FadeInTop')
    menuBody.classList.add('overflow-y-hidden')
    topNav.classList.remove('hidden')
});
cancelBtn.addEventListener("click", () => {
    mobileBar.classList.add("hidden");
    cancelBtn.classList.add("hidden");
    menuBurger.classList.remove("hidden");
    mobileBar.classList.add("animate-FadeInDown");
    menuBody.classList.remove('overflow-y-hidden')
    topNav.classList.add('hidden')

});



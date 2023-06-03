const menuBurger = document.getElementById('burger');
const cancelBtn = document.getElementById('cancel')
const mobileBar = document.getElementById('mobile-bar')

menuBurger.addEventListener("click", () => {
    mobileBar.classList.remove('hidden')
    cancelBtn.classList.remove('hidden')
    menuBurger.classList.add('hidden')
    mobileBar.classList.add('animate-FadeInTop')
});
cancelBtn.addEventListener("click", () => {
    mobileBar.classList.add("hidden");
    cancelBtn.classList.add("hidden");
    menuBurger.classList.remove("hidden");
    mobileBar.classList.add("animate-FadeInDown");
});



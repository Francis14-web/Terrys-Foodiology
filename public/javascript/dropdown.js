const button = document.getElementById("dropdownDefaultButton");
const menu = document.getElementById("dropdown");
const options = document.querySelectorAll("#dropdown li");


button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

options.forEach((option) => {
    option.addEventListener("click", () => {
        button.innerText = option.innerText;
        menu.classList.toggle("hidden");        
    });
});

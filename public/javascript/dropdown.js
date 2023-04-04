const select = document.getElementById("dropdown");
const visitor = document.getElementById("visitor-parent");

select.addEventListener("change", () => {
    const selectIndex = select.selectedIndex; // kinukuha yung index ni select
    const selectOption = select.options[selectIndex]; // kinukuha yung options ni select gamit yung select index

    if(selectOption.value === "Visitor"){ 
        visitor.classList.remove('hidden')
        visitor.classList.add('flex')
    }
    else{
        visitor.classList.add('hidden')
    }
});


const viewOrder = document.getElementById('view-order');
const orderDetail = document.getElementById('order-detail');
const main = document.getElementById('main-window');
const viewBack = document.getElementById('view-bg');
const cancelSheet = document.getElementById('cancelBtn');



viewOrder.addEventListener("click", () =>{
    orderDetail.classList.remove("hidden");
    orderDetail.classList.add("fixed")
    main.classList.add("overflow-y-hidden")
    viewBack.classList.remove("hidden");
})

cancelSheet.addEventListener("click", () =>{
    orderDetail.classList.add("hidden");
    orderDetail.classList.remove("fixed");
    main.classList.remove("overflow-y-hidden");
    viewBack.classList.add("hidden");
})
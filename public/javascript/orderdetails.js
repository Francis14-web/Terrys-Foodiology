const viewOrder = document.getElementById('view-order');
const orderDetail = document.getElementById('order-detail');
const main = document.getElementById('main-window');
const viewBack = document.getElementById('view-bg');
const cancelSheet = document.getElementById('cancelBtn');



//     const checkOrderDetail = setInterval(() => {
    if(orderDetail == null){
    // viewOrder.classList.remove("hidden");   
    // viewOrder.classList.add("fixed");   
    console.log("walang laman")
    }
    else{
        viewOrder.addEventListener("click", () => {
        orderDetail.classList.remove("hidden");
        orderDetail.classList.add("fixed");
        main.classList.add("overflow-y-hidden");
        viewBack.classList.remove("hidden");
        });
        
        cancelSheet.addEventListener("click", () => {
        console.log("click")
        orderDetail.classList.add("hidden");
        orderDetail.classList.remove("fixed");
        viewOrder.classList.remove("hidden")
        viewOrder.classList.add("fixed");
        main.classList.remove("overflow-y-hidden");
        viewBack.classList.add("hidden");
        });
        
    }
    
// }, 500);



// viewOrder.addEventListener("click", ()=>{
//     orderDetail.classList.remove("-left-64")
//     orderDetail.classList.add("inset-x-0")
//     console.log("click")
// })
// cancelSheet.addEventListener("click", () => {
//     orderDetail.classList.add("-left-64")
//     orderDetail.classList.remove("inset-x-0")
//     console.log("click")

// })


        


  
<div class="p-10">
    <div class="grid grid-cols-8 auto-rows-fr p-5 my-3 shadow-md rounded bg-neutral-200">
        <p>Customer Name</p>
        <p>Order #</p>
        <p>Food Name</p>
        <p>Quantity</p>
        <p>Total Price</p>
        <p>Status</p>
        <p>Ordered At</p>
        <p>Pick-up time</p>
    </div>
    @forelse ($orders as $order)
        <x-canteen.canteen-order-list-card :order="$order"/>
    @empty
    <div class="flex flex-col h-full items-center justify-center">
        <img class="h-52 w-auto" src="/pictures/deadline.png">   
        <p class="text-xl font-light ">No orders found!</p> 
    </div>
    @endforelse
    <div class="my-10 mx-auto flex justify-end">
        {{ $orders->links() }}
    </div>
</div>

<div class="p-10">
    <div class="grid grid-cols-7 auto-rows-fr p-5 my-3 shadow-md rounded bg-neutral-200">
        <p>Customer Name</p>
        <p>Order #</p>
        <p>Food Name</p>
        <p>Quantity</p>
        <p>Total Price</p>
        <p>Status</p>
        <p>Updated At</p>
    </div>
    @forelse ($orders as $order)
        <x-canteen.canteen-order-list-card :order="$order"/>
    @empty
        No orders found
    @endforelse
    <div class="my-10 mx-auto flex justify-end">
        {{ $orders->links() }}
    </div>
</div>

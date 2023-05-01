<div class="p-10">
    <div class="grid grid-cols-7 auto-rows-fr p-5 my-3 shadow-md rounded bg-neutral-100">
        <p>Customer Name</p>
        <p>Order #</p>
        <p>Food Name</p>
        <p>Quantity</p>
        <p>Total Price</p>
        <p>Status</p>
        <p>Updated At</p>
    </div>
    @forelse ($orders as $order)
        <div class="grid grid-cols-7 auto-rows-fr p-5 my-3 shadow-md rounded">
            <p>{{$order->firstname . " " . $order->lastname}}</p>
            <p>{{"Order #" . substr($order->id, 0, 8)}}</p>
            <div>
                @foreach (json_decode($order->food_name) as $food)
                    <p>{{$food}}</p>
                @endforeach
            </div>
            <div>
                @foreach (json_decode($order->order_quantity) as $quantity)
                    <p>{{$quantity}}</p>
                @endforeach
            </div>
            <p>{{$order->total_price}}</p>
            <p>{{$order->status}}</p>
            <p>{{$order->updated_at}}</p>
        </div>
    @empty
        No orders found
    @endforelse
    <div class="my-10 mx-auto flex justify-end">
        {{ $orders->links() }}
    </div>
</div>

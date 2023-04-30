<div class="p-10">
    @forelse ($orders as $order)

        <div class="grid grid-cols-8 auto-rows-fr">
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
            <p>{{$order->created_at}}</p>
            <p>{{$order->updated_at}}</p>
        </div>
    @empty
        No orders found
    @endforelse
    {{ $orders->links() }}
</div>

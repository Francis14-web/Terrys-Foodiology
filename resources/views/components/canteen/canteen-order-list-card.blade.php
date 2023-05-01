@props([
    'order' => 'order'
])

<div class="grid grid-cols-7 auto-rows-fr p-5 my-3 shadow-md rounded bg-white">
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
@props([
    'order' => 'order'
])

<div class="grid grid-cols-8 auto-rows-fr p-5 my-3 shadow-md rounded bg-white items-center">
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
    <div>
        <x-dropdown-field-orders :id="$order->id" name="status" :selected="$order->status" :options="[
            'Serving' => 'Serving',
            'Failed' => 'Failed',
            'Success' => 'Success',
        ]" />
    </div>
    <p>{{\Carbon\Carbon::parse($order->created_at)->diffForhumans()}}</p>
    @if (Carbon\Carbon::now()->gt($order->pickup_date))
        <p class="date text-red-500">{{ Carbon\Carbon::parse($order->pickup_date)->diffForHumans() }}</p>
    @else
        <p class="date">{{ Carbon\Carbon::parse($order->pickup_date)->diffForHumans() }}</p>
    @endif



</div>
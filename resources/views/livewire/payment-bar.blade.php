<div class="fixed bottom-0 w-fill-available w-moz-available px-5 py-2 border-t-2 flex justify-end items-center gap-5">
    <div class="max-w-xs w-full flex items-stretch">
        <x-dropdown-field label="Pickup Time" name="pickup_time" :options="$order_time"/>
    </div>
    <p>Total: <span class="font-bold">₱{{ $order->total_price }}</span> </p>
    <button class="bg-green-500 text-white py-2 px-3 hover:bg-green-800 rounded-md hover:shadow-md" wire:click="paymentButton">Pay Now</button>
</div>
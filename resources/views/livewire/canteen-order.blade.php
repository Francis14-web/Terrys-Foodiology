<div class="p-10">
    @forelse ($orders as $order)
        <p>{{ $order->id }}</p>
    @empty
        No orders found
    @endforelse
    {{ $orders->links() }}

</div>

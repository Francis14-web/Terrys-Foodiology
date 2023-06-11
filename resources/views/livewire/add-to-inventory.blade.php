<div>
    <h1 class="mb-1 font-bold text-lg"> Add Food to Today's Menu </h1>
    <p class="mb-3">To add this food to today's menu, please add the food's stock.</p>
    <x-livewire-input-field label="Food Stock" type="number" model="food_stock" />
    <button wire:click="addToInventory" type="button" class="bg-green-500 text-white py-2 text-xs rounded font-medium w-full hover:bg-green-900 cursor-pointer">Add Food to Menu</button>
</div>

<div>
    <h1 class="mb-2 font-bold text-lg"> Add Food </h1>
    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <x-livewire-input-field label="Food Name" type="text" model="food_name" />
        <x-livewire-input-field label="Food Price" type="number" model="food_price" />
        <x-livewire-input-field label="Food Description" type="text" model="food_description" />
        <x-livewire-file-upload-field label="Food Image" type="file" model="food_image" />
        <x-livewire-select-field label="Food Category" type="text" model="food_category" :categories="$categories"/>
        <x-livewire-input-field label="Food Stock" type="number" model="food_stock" />
        <input type="submit" value="Add Food" class="bg-green-500 text-white py-2 text-xs rounded font-medium w-full hover:bg-green-900 cursor-pointer">
    </form> 
</div>

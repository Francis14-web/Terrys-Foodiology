<div>
    <h1 class="mb-2 font-bold text-lg"> Edit Food </h1>
    <form wire:submit.prevent="updateFood" enctype="multipart/form-data">
        <x-livewire-input-field label="Food Name" type="text" model="food_name" />
        <x-livewire-input-field label="Food Price" type="number" model="food_price" />
        <x-livewire-input-field label="Food Description" type="text" model="food_description" />
        <x-livewire-file-upload-field label="Food Image" type="file" model="food_image" />
        <div class="flex gap-2 items-center mb-4">
            @foreach ($existing_images as $image)
                <div class="relative">
                    <img src="{{ asset('storage/' . $image) }}" alt="Uploaded Images Preview" class="w-20 h-20 object-cover rounded">
                    <button type="button" wire:click="deleteImage('{{ $image }}')" class="absolute top-0 right-0 px-2 py-1 text-red-500 hover:text-red-700">Delete</button>
                </div>
            @endforeach
        </div>        
        <x-livewire-select-field label="Food Category" type="text" model="food_category" :categories="$categories"/>
        <input type="submit" value="Update Food" class="bg-green-500 text-white py-2 text-xs rounded font-medium w-full hover:bg-green-900 cursor-pointer">
    </form> 
</div>

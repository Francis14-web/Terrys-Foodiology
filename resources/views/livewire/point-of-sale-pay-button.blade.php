<div>
    <div class="flex flex-col gap-2">
        <p class="text-xl text-black/70 mb-5">E-Wallet Transaction</p>
        <button wire:click="markAsPaid" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-3 text-center cursor-pointer">Paid via E-Wallet</button>
    </div>
    <div class=" h-px w-full my-5 bg-black/50"></div>
    <div class="flex flex-col gap-2">
        <p class="text-xl text-black/70 mb-5">Cash Transaction</p>
        <div class="grid grid-cols-2 gap-2">
            <button wire:click="addMoney(100)" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-5 text-center font-semibold cursor-pointer">100</button>
            <button wire:click="addMoney(200)" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-5 text-center font-semibold cursor-pointer">200</button>
            <button wire:click="addMoney(500)" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-5 text-center font-semibold cursor-pointer">500</button>
            <button wire:click="addMoney(1000)" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-5 text-center font-semibold cursor-pointer">1000</button>
        </div>
        <div class="flex items-center justify-between my-3">
            <p class="text-black/70">Cash Payment: ₱{{$cash}}</p>
            <p class="text-black/70">Change: ₱{{$change}}.00</p>
        </div>
        <button wire:click="markAsPaid" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-3 text-center cursor-pointer">Complete Transaction</button>
        <div class="flex items-center gap-5">
            <div class=" h-px w-full my-5 bg-black/50"></div>
            <p>or</p>
            <div class=" h-px w-full my-5 bg-black/50"></div>

        </div>

        <button wire:click="markAsPaid" class="bg-transparent border border-green-500 text-green-500 hover:text-white w-full rounded-md hover:bg-green-500 py-3 text-center cursor-pointer">Paid exact amount</button>
    </div>
</div>

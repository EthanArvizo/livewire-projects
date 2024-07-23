<div class="flex flex-col items-center">
    <div class="flex p-16 mx-auto justify-center items-center gap-4">
        <input type="number" wire:model="number1" placeholder="Number 1" style="border: 1px solid #ccc; padding: 0.5rem;">
        <select class="w-24" wire:model="action" style="border: 1px solid #ccc; padding: 0.5rem;">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" wire:model="number2" placeholder="Number 2" style="border: 1px solid #ccc; padding: 0.5rem;">
        <button wire:click="calculate"
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
                {{ $disabled ? 'disabled' : '' }}>
            =
        </button>
    </div>
    <p class="text-3xl mt-4">{{ $result }}</p>
</div>
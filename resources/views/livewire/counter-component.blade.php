<div>
    <p>HOLA AMIGOS</p>
    <p>El contador es: {{ $count }}</p>
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" wire:click="decrement">
        Decrementar
    </button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="increment">
        Incrementar
    </button>
</div>

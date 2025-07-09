<div>
    <form wire:submit="submit">
        <div>
            <label for="count">Bird Count</label>
            <input wire:model="count" />
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea wire:model="notes"></textarea>
        </div>
        <button>Add a New Bird Count Entry</button>
    </form>
</div>

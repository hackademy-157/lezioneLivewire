<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>{{$counter}}</h2>
                <button class="btn btn-success px-3" wire:click="increment">+</button>
                <button class="btn btn-success px-3" wire:click="decrement">-</button>
                <button class="btn btn-success px-3" wire:click="incrementByNumber(5)">+5</button>
                <button class="btn btn-success px-3" wire:click="decrementByNumber(5)">-5</button>
            </div>
        </div>
    </div>
</div>

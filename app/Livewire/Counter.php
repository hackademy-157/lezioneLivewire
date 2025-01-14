<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    //? inseriscvo tutti gli attributi e tutti i metodi che mi servono per la logica del componente
    public $counter = 0;

    public function increment(){
        $this->counter++;
    }
    public function decrement(){
        $this->counter--;
    }

    public function incrementByNumber($number){
        $this->counter += $number;
    }

    public function decrementByNumber($number){
        $this->counter -= $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

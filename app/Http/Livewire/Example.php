<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.example');
    }
}

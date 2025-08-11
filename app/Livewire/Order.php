<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Order extends Component
{
    #[Title('Order')]
    public function render()
    {
        return view('livewire.order');
    }
}

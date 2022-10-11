<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Test extends Component
{
    public $count = 0;

    public function mount(){
        
    }

    public function render()
    {
        return view('livewire.Test');
    }
}

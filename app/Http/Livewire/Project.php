<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Project extends Component
{
    public $count =0;
    public function render()
    {
        return view('livewire.project');
    }
}

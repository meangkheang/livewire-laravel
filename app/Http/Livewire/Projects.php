<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Projects extends Component
{
    
    public function CreateProject(){
        return redirect('/projects/new');
    }

    public function mount(){
        
    }
    public function gotoProject($id){
        return redirect('/projects/' . $id);
    }

    
    public function render()
    {
        return view('project.projects');
    }
}

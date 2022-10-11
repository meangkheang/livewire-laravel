<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProject extends Component
{
    use WithFileUploads;

    public $project_name;
    public $project_keypoint='';
    public $thumnail;
    public $tech_stack;
    public $tech_stacks = [];

    protected $queryString =[
        'project_name' => ['except' => '' , 'as'=>'p_name'],
        
    ];

    public function updatedThumnail(){
        $this->validate([
            'thumnail' => 'image|max:1024|', //1mb
            // 'photos.*' => 'image|max:1024|' //1mb
        ]);
    }
    public function getTechStacks(){
        $this->tech_stacks = [];
        $this->tech_stacks = explode(',',$this->tech_stack);

        if($this->tech_stacks[count($this->tech_stacks)-1] == ''){
            array_pop($this->tech_stacks);
        }
    }
    

    public function mount(){
        
    }
  

    public function render()
    {
        return view('create.create_project');
    }
}

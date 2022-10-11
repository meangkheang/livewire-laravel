<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Select extends Component
{
    public $select;
    public $color = true;
    public $message;
    public User $user;
    public $query='';

    protected $listeners = ['add' =>'add'];

    public function add(){
        $this->select= 'from emit';
    }

    protected $rules  = [
        'user.name' => 'required|string',
        'user.email' => 'required|string',
        'user.password' => 'required|string',
    ];

    public function save(){

        $this->validate();
        $this->user->save();
    }

    function search(){
        if($this->query == ''){
            session()->flash('message','input could not be empty');
            return;
        }
            $this->query = $this->query;
    }

    public function mount(){
        // $this->fill(['name'=>'hello']);
        $this->user = new User();
    }
    public function render()
    {
        return view('livewire.select');
    }
}

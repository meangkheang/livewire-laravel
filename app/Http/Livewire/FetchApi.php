<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FetchApi extends Component
{

    public $repos = array();
    public $search = '';

    protected $queryString = [
        'search' => ['except' => '' , 'as' =>'s']
    ];

    public function fetchRepos()
    {
        if($this->search == '') {
            session()->flash('messsage','you need to type something');
            return;
        }

        $repos =  Http::get('https://api.github.com/users/' . $this->search .'/repos')->json(); 
        $this->repos = $repos;
    }
  
    
    public function render()
    {
        return view('livewire.fetch-api');
    }
}

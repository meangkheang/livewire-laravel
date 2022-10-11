<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class SelectDynamic extends Component
{
    use WithFileUploads;

    public $group;
    public $students = [];
    public $photos = [];

    public function updatedPhotos(){
        $this->validate([
            'photos.*' => 'image|max:1024'
        ]);

      
    }
    public function save()
    {
        $newImages =  $this->validate([
            'photos.*' => 'image|max:1024'
        ]);

          foreach($this->photos as $photo){
            $photo->storePublicly('photos','pb');
        }
    }

    protected $queryString = [
        'group' => ['except' => '', 'as' => 'group']   
    ];

    public function mount(){
        $this->group = 'g1';
        $this->groupChange();
    }

    public function groupChange(){

        //clear all stuff
        $this->students = [];
        
        switch($this->group){
            case 'g1': 
                    $this->students = [
                        'Panha',
                        'Por'
                    ];              
                            
                break;
            case 'g2':
                    
                    $this->students = [
                        'Kheang',
                        'Rith',
                        'Reach'    
                    ];       
                    
                break;

            default: 
            break;
        }

    }

    public function render()
    {
        return view('livewire.select-dynamic');
    }
}

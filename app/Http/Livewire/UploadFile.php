<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadFile extends Component
{
    use WithFileUploads;

    public $photos = [];
    public $photo;

    public function save(){

        $this->validate([
            'photo' => 'image|max:1024|', //1mb
            // 'photos.*' => 'image|max:1024|' //1mb
        ]);

        foreach($this->photos as $photo){
            $photo->storePublicly('photos','pb');
        }
        session()->flash('message','Added sucessfully 😇');
    }
    public function updatedPhoto(){
        $this->validate([
            'photo' => 'image|max:1024|', //1mb
            // 'photos.*' => 'image|max:1024|' //1mb
        ]);
    }

    public function render()
    {
        return view('livewire.upload-file');
    }
}

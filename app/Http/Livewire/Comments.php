<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments;
    public $newComment;

    public function mount($initialComments)
    {
        $this->comments = $initialComments; 
        
    }
    
    public function updated($field){
        $this->validateOnly($field,[
            'newComment' => 'required|max:255'
        ]);
    }

    public function removeComments($commentId){
        Comment::find($commentId)->delete();

        $this->comments = Comment::latest()->get();
        session()->flash('message','Comment deleted successfully 😙');

    }
    public function addComments()
    {
        $this->validate([
            'newComment' => 'required|max:255'
        ]);

        // 'created_at' => Carbon::now()->diffForHumans(),
        // if($this->newComment == '') return;  

        Comment::create([
            'body' => $this->newComment,
            'user_id' => 1
        ]);

        //since it does not reload page we use query instead
        $this->comments = Comment::latest()->get();

        $this->newComment = "";

        session()->flash('message','Comment added successfully');
    }


    public function render()
    {
        return view('livewire.comments');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Nav extends Component
{
    public function Home(){
        return redirect('/');
    }

    public function About(){
        return redirect('/about');
    }

    public function Contact(){
        return redirect('/contact');
    }
    public function Community(){
        return redirect('/community');
    }

    public function Projects(){
        return redirect('/projects');
    }
    public function Login(){
        return redirect('/login');
    }
    public function Signup(){
        return redirect('/signup');
    }

    public function mount(){
        
    }

    public function render()
    {
        return view('project.nav');
    }
}

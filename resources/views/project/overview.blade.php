@extends('layout')
@section('content')

<div class="mt-32 items-center w-2/3 mx-auto  flex justify-evenly">
    <div>
        <span class="inline-block font-bold text-xs mb-5">__mkDev</span>
        <h1 class="text-4xl font-black mb-5">Welcome :)</h1>
        <p class="mb-12">Showcase about your project via <strong>LOGO.</strong><br> 
            You can create blog about your project<br>and share it to community.</p>
        <a href="/projects" class='cursor-pointer text-white rounded-md px-3 py-2 bg-[#1E1E1E]'>Check out my projects</a>
    </div>

    <img  src="https://images.unsplash.com/photo-1608999383953-d61f5d9c1ace?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="quote.png"
    class="w-1/4 object-cover rounded drop-shadow-lg">
</div>

@endsection
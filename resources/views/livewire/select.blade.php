{{-- <div class="mt-8 mx-auto w-1/2">
    @if (session()->has('message'))
        <p class="text-sm text-red-600 ">{{ session('message') }}</p>
    @endif
    <form wire:submit.prevent='search'>
        <input type="text" wire:model.defer="query" class="outline-none px-2 py-1 rounded w-1/2 border font-semibold text-sm" placeholder="Type something">
        <button wire:click="search" class="rounded px-4 py-1 bg-indigo-600 shadow-md text-white">Search</button>
    </form>
    <br>    
    <span class="text-xl font-bold">
       UserType :  {{ $query }}

    </span>
</div> --}}
{{-- <div class="mx-auto mt-8">
    <form wire:submit.prevent="save" class="w-1/2 mx-auto flex flex-col items-center gap-2">

        <input type="text" wire:model.defer="user.name" class="outline-none px-2  py-1 rounded w-1/2 border font-semibold text-sm" placeholder="Name">
        <input wire:model.defer="user.email" type="email" class="outline-none px-2 py-1 rounded w-1/2 border font-semibold text-sm" placeholder="Email">
        <input wire:model.defer="user.password" type="password" class="outline-none px-2 py-1 rounded w-1/2 border font-semibold text-sm" placeholder="Password">

        <button type="submit" class="rounded px-4 py-1 bg-indigo-600 shadow-md text-white">Save</button>
    </form>
</div> --}}


{{-- <div>
    <p class="{{ $color ? 'bg-red-200' : 'bg-blue-200'  }}">Click to change my color</p>
    {{ $message }}

    <button wire:click='$toggle("color")'>Show</button>
    <br>
    <input type="text" wire:keydown='$set("message",$event.target.value}})' class="border">
</div> --}}



<div>
    <button wire:click='$emit("add")' id="btn" class="px-4 py-1 rounded bg-indigo-500 text-white">Trigger event from emit with javascript</button><br>
    <select name="" id="" wire:model='select'>
        <option value="hello">Hello</option>
        <option value="welcome">Welcome</option>
        <option value="sub">Sub</option>
    
    </select>
    <h1>{{ $select }}</h1>
</div>

<script>
    // document.getElementById('btn').addEventListener('click',function(e){
    //     Livewire.emit('add');
    // })
</script>

<div>
    @foreach ($errors->all() as $error)
        <span class="error">{{ $error }}</span>
    @endforeach
    @if (session()->has('message'))
        <p class="px-4 py-2 rounded bg-green-600 text-white">{{ session('message') }}</p>
    @endif
    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo" >
     
        <button type="submit">Save Photo</button>
    </form>

    <br>
    
    @if($photo)
        <img src="{{ $photo->temporaryUrl() }}" class="w-[50%]">
    @endif

    
</div>
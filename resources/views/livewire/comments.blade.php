<div class="mt-4">
    <h1 class="text-center text-2xl font-bold my-8">Comments</h1>

    <div class="w-1/2 mx-auto drop-shadow-lg shadow-lg rounded p-8 relative">

        <div>
            @if (session()->has('message'))
                <div class="w-full bg-green-400 rounded shadow-sm p-4 text-white">
                    {{ session('message') }}
                </div>
            @endif
           
        </div>

        <form class="flex justify-center gap-2 items-center" wire:submit.prevent='addComments'>
           
            <div class="w-1/2">
                @error('newComment')
                <span class="text-red-400 text-sm text-center font-semibold">{{ $message }}</span><br>
                @enderror
                <input wire:model.model.debounce.500ms="newComment" class="rounded px-2 py-2 border outline-none w-full text-center" type="text" placeholder="What's in your mind">
            </div>
            <div class="self-end">
                <button class="bg-blue-700 rounded px-4 py-2 text-white hover:bg-blue-500" type="submit">Add</button>
            </div>
        </form>
        


        <div class="h-[80vh] overflow-auto mt-8">

            @forelse ($comments as $index=>$comment)

                <div class="rounded p-6 border mb-2">
                    <div class="flex gap-4 items-center mb-4 justify-between">

                        <div class="flex items-center gap-4">
                            <h1 class="font-bold text-xl">{{ $comment->creator->name }}</h1>
                            <span class="text-sm pt-1">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>

                        <i class=" fa fa-times text-red-600 hover:text-red-700 cursor-pointer" wire:click="removeComments({{ $comment->id }})"></i>
                    </div>
                    <div>
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            @empty
                <h1 class="text-2xl text-center font-bold">Empty</h1>
            @endforelse
        </div>
       
    </div>
</div>

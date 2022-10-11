{{-- <div>

    <select wire:change='groupChange' wire:model='group'  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg">
        <option value="g1">Group1</option>
        <option value="g2">Group2</option>
    </select>
    <br>
        
    <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg">
        @foreach ($students as $student)
            <option value="{{ $student }}">{{ $student }}</option>
        @endforeach
    </select>
</div> --}}

<div>

    <div>
        <div class="w-full text-center">
            @foreach ($errors->all() as $error)
            <span class="text-red-500">{{ $error }}</span><br>
            @endforeach
        </div>
      
        <br>
    
        <div class="flex justify-center gap-5 items-center">
            <input class="bg-clip-padding m-0 border-gray-300 outline-none block px-3 py-1.5 font-normal text-base rounded
            file:border-none file:rounded-lg file:bg-indigo-700 file:text-sm file:text-white file:py-2 file:px-4 
            file:cursor-pointer
            appearance-none
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " type="file" wire:model='photos' multiple>
            <div>
                <button wire:click='save' class=" text-white rounded-md bg-indigo-400 text-sm px-4 py-2">Submit</button>
            </div>
        </div>
        <br>
        <hr>
        
        <div class="w-full flex justify-center gap-4 flex-wrap">
            @if (isset($photos))
                @foreach ($photos as $photo)
                    <img src="{{ $photo->temporaryUrl() }}" alt="" class="rounded-sm object-cover w-64 h-64">
                @endforeach
            @endif
        </div>

    </div>
    
</div>
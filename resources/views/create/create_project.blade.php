@if (!session()->has('user'))
    <script>window.location = "/";</script>
@endif

<div class="pt-8 w-2/3 mx-auto relative">
  
    <h1 class="pb-12 text-center text-2xl font-bold ">Create project</h1>

    <div class="w-full relative flex">
        <div class="w-[50%] border-x-2 h-[70vh] relative text-center flex flex-col gap-4 items-center">

            <input  wire:model.debounce.500ms='project_name' type="text" class="w-[90%] outline-none px-4 py-2 rounded bg-stone-200 placeholder:text-sm placeholder:text-gray-500" placeholder="Project's Name">
            <input  wire:model.debounce.500ms='project_keypoint' type="text" class="w-[90%] outline-none px-4 py-2 rounded bg-stone-200 placeholder:text-sm placeholder:text-gray-500" placeholder="Descript about your project as short and keypoint as possible">

            <input class="bg-clip-padding m-0 border-gray-300 outline-none block px-3 py-1.5 font-normal text-base rounded
            file:border-none file:rounded-lg file:bg-indigo-700 file:text-sm file:text-white file:py-2 file:px-4 
            file:cursor-pointer
            appearance-none
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " type="file" wire:model='thumnail'>

            <form wire:submit.prevent='getTechStacks' class="w-full">
                <input wire:model.debounce.500ms='tech_stack'  type="text" class="w-[90%] outline-none px-4 py-2 rounded bg-stone-200 placeholder:text-sm placeholder:text-gray-500" placeholder="Type a tech stack that you use . ex: PHP, React">
            </form>
           

        </div>
        <div class="w-[50%] border-r-2 ">

            <div>

                <h1 class="pb-2 text-center text-3xl font-bold" >{{ $project_name }} {{ $project_name ==''?"Project's Title" : '' }}</h1>
                <p class="text-center px-4 pb-8">
                    @if ($project_keypoint == ''  )
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corporis praesentium dolore!
                    @endif
                    {{ $project_keypoint }}
                    
                </p>

                @if ($thumnail == '')
                <img src="https://images.unsplash.com/photo-1664574653790-cee0e10a4242?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="w-full px-4 rounded object-fit" alt="thumnail.jpg">
                @else
                <p class="px-4 text-sm text-red-600">@error('thumnail') {{ $message }} @enderror</p>
                <img src="{{ $thumnail->temporaryUrl() }}" class="w-full px-4 rounded object-fit" alt="thumnail.jpg">
                @endif

                <div class="mt-16 h-1 rounded  bg-red-400 w-[30%] mx-auto bg-gradient-to-r from-indigo-500 to-blue-500"></div>
            </div>

            <div>
                <h1 class="pt-6 pb-6 text-center text-3xl font-bold" >TECH STACK</h1>
                <div class="px-4 flex justify-center gap-2 flex-wrap mb-12">
                    @foreach ($tech_stacks as $item)
                        <span class="rounded-lg text-white py-2 px-4  bg-indigo-600">{{ strtoupper($item) }}</span>
                    @endforeach
                </div>
            </div>

            <div>
               
            </div>


        </div>
    </div>

</div>

<div class="w-2/3 mx-auto mt-24">

    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Projects. 3</h1>

        @if (session()->has('user'))
            <button wire:click='CreateProject' class="text-sm text-white px-4 py-1.5 rounded-sm bg-indigo-600">Create Project</button>
        @endif
    </div>

    <div class="mt-8">

        <div wire:click='gotoProject(1)'  class="cursor-pointer text-sm transition-all delay-1s hover:scale-105 rounded-lg w-72 border h-[16rem] relative">
            <img  src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="object-cover w-full h-[50%] rounded-t-lg" > 
            <div>
                <h1 class="font-bold text-lg text-center pt-4">Project Name</h1>
                <div class="flex justify-between items-center px-4 mt-4">
                    <div class="flex items-center gap-4">
                        <img class="object-cover rounded-full w-12 h-12" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                        <p>meangkheang</p>
                    </div>

                        <p>10 mn ago</p>
                    
                </div>
            </div>
        </div>

    </div>

</div>

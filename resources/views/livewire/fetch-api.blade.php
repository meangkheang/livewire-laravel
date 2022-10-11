<div>
    <div wire:loading.delay>
        <div class="loader">
            <div class="bar"></div>
        </div>
    </div>
    <h1 class="text-2xl font-bold text-center mb-4 pt-2">Github Repository</h1>
    <form action="" class="mx-auto w-1/2 relative" wire:submit.prevent='fetchRepos'>
        <input wire:model.debounce.500ms='search' type="text" placeholder="Search user..." class="mx-auto block w-1/2 px-4 py-1 outline-none  border-b-2 border-green-500" value="{{ $search }}">
        @if (session()->has('messsage'))
            <p class="text-center text-red-500 text-xs">you need to type something..</p>
        @endif
    </form>

    <div class="w-1/2 mx-auto p-4 mt-8">
        @forelse ($repos as $index => $item)
            @if (isset($item['name']))
                <div class="border-t-[1px] py-8">   
                    <a href="{{ $item['html_url'] }}" class="hover:underline cursor-pointer text-lg font-semibold inline-block mr-2 text-blue-300">{{ $item['name'] }}</a> <span class="rounded-lg px-2 py-[3px] border text-xs">{{ $item['visibility'] }}</span>
                    <div>
                        <p class="text-md pr-2">{{ $item['description'] }}</p>
                    </div>
                </div>
            @else
                <h1>There are no repos</h1>
                @break
            @endif
        @empty
            <h1 class="text-xl text-center font-bold text-gray-500">Whoop, Empty</h1>
        @endforelse
    </div>
</div>

<style>
    @keyframes loader-animation {
  0% {
    width: 0%;
  }
  49% {
    width: 100%;
    left: 0%
  }
  50% {
    left: 100%;
    width: 0;
  }
  100% {
    left: 0%;
    width: 100%
  }
}
.loader {
  height: 3px;
  width: 100%;
}
.loader .bar {
  position: absolute;
  top: 0;
  height: 3px;
  background-color: dodgerblue;
  animation-name: loader-animation;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
</style>
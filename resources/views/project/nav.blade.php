<div>
  <div wire:loading.delay class="absolute top-0 w-full left-0">
    <div class="loader">
        <div class="bar"></div>
    </div>
</div>

<nav class="flex justify-around mt-8 mb-12 items-center">
    <a href="/" class="cursor-pointer text-2xl font-black">LOGO</a>
    <ul class="flex gap-8 items-center">

        <li><a wire:click='Home' class="cursor-pointer hover:text-red-300 ">Overview</a></li>
        <li><a wire:click='Projects' class="cursor-pointer hover:text-red-300 ">My Project</a></li>
        <li><a wire:click='Community' class="cursor-pointer hover:text-red-300 ">Community</a></li>
        <li><a wire:click='About' class="cursor-pointer hover:text-red-300 ">About</a></li>
        <li><a wire:click='Contact' class="cursor-pointer hover:text-red-300 ">Contact</a></li>

    </ul>
    @if (session()->has('user'))
      <div class="flex gap-2 items-center">
        <p class="pr-4 font-bold">{{ session('user') }}</p>
        <a href="/signout" class="cursor-pointer hover:text-gray-300 bg-red-600 text-white px-4 rounded-sm py-2 text-sm">Sign Out</a>
      </div>
    @else

    <div>
      <a wire:click='Login' class="cursor-pointer border-2 hover:text-red-600 rounded  px-4 rounded-sm py-2 text-sm">Log in</a>
      <a wire:click='Signup' class="cursor-pointer hover:bg-indigo-600 bg-[#1E1E1E] text-white px-4 rounded-sm py-2 text-sm">Sign up</a>
    </div>

    @endif

</nav>
</div>


<script>
    let lis  = document.querySelectorAll('nav li a');

    for(let i =0;i<lis.length;i++){
        lis[i].addEventListener('click',function(e){
            
           for(let x =0;x<lis.length;x++){
            lis[x].classList.remove('text-red-600');
           }
            
            e.target.classList.add('text-red-600');

        });
    }
</script>

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
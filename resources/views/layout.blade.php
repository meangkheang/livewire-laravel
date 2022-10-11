<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @include('fonts')
    @include('styles')
    @livewireStyles
</head>
<body>
    
    <div class="">
        @livewire('nav')
        @yield('content')
    </div>

    {{-- <livewire:counter /> --}}
    {{-- <livewire:comments :initialComments="$comments"/> --}}
    {{-- @livewire('fetch-api') --}}
    {{-- @livewire('select') --}}
    {{-- @livewire('upload-file') --}}
    {{-- @livewire('select-dynamic') --}}
    {{-- @livewire('test',['item'=>'line']) --}}
    
    
 

    @livewireScripts
</body>
</html>
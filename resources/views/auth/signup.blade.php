@extends('layout')
@section('content')

<div class="w-2/3 mx-auto pt-12">
    <h1 class="text-center text-3xl font-bold">SIGN UP</h1>

    <form action="/signup" method="post">
    @csrf
    <div class="pt-8 flex flex-col gap-4">
        <div class="w-[50%] mx-auto">
            <label for="">Username</label><span class="text-sm text-red-600 pl-4">@error('name'){{ $message}} @enderror</span><br>
            <input name="name" type="text" placeholder="Jonathan" class="w-full px-4 py-2 rounded bg-gray-300 outline-none placeholder:text-gray-500">
        </div>
        <div class="w-[50%] mx-auto">
            <label for="">Email</label><span class="text-sm text-red-600 pl-4">@error('email'){{ $message}} @enderror</span><br>
            <input name="email" type="text" placeholder="Jonathan@gmail.com" class="w-full px-4 py-2 rounded bg-gray-300 outline-none placeholder:text-gray-500" type="email">
        </div>
        <div class="w-[50%] mx-auto">
            <label for="">Password</label><span class="text-sm text-red-600 pl-4">@error('password'){{ $message}} @enderror</span><br>
            <input name="password" type="password" placeholder="Jonathanpw11" class="w-full px-4 py-2 rounded bg-gray-300 outline-none placeholder:text-gray-500" type="password">
        </div>

        <div class="w-[50%] mx-auto">
            <label for="">Confirm Password</label><span class="text-sm text-red-600 pl-4">@error('confirm_password'){{ $message}} @enderror</span><br>
            <input name="confirm_password" type="password" placeholder="Jonathanpw11" class="w-full px-4 py-2 rounded bg-gray-300 outline-none placeholder:text-gray-500" type="password">
        </div>

        <div class="w-full text-center pt-6">
            <button  type="submit" class="text-white px-4 py-2 rounded bg-indigo-600">SIGN UP</button>

        </div>

    </div>
    </form>

</div>

@endsection
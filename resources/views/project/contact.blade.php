@extends('layout')
@section('content')

<div class="mx-auto w-2/3">
    <div class="w-2/3 mx-auto pt-16">
        <h1 class="text-3xl font-bold">Get in touch with me :)</h1>

        <div class="flex pt-20 gap-8">
            <div class="w-1/2">
                <label for="">Your name</label><br>
                <input type="text"  class="text-black w-full  w-full outline-none px-4 py-2 bg-gray-200 placeholder:text-lime-800" placeholder="Jackson"><br>
            </div>
          
            <div class="w-1/2">
                <label for="">Your email</label><br>
                <input type="text"  class="text-black w-full outline-none px-4 py-2 bg-gray-200 placeholder:text-lime-800" placeholder="Jackson@gmail.com">
            </div>

        </div>

        <div class="pt-8">
            <label for="">Messages</label><br>
            <textarea  type="textarea"  class="text-black w-full outline-none px-4 py-2 bg-gray-200 placeholder:text-lime-800 h-[10rem]" placeholder="messages" ></textarea>
        </div>
       
        <a href="{{ url('?send_email=1') }}" class='cursor-pointer text-white rounded-md px-6 float-right py-2 bg-[#1E1E1E]'>Send</a>

    </div>
</div>


@endsection
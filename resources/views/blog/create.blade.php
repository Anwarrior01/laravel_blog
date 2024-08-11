@extends('layouts.app')

@section('content')
    <div class=" container m-auto text-center pt-16 pb-5 ">
        <h1 class="text-6xl text-gray-700  font-bold">Add a new Post</h1>
    </div>
    <div class=" container m-auto text-center pt-14 pb-5 ">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title"
                class="w-full h-20 text-4xl rounded-lg shadow-lg border-b p-16 mb-5">
            <textarea name="" id="" cols="30" rows="10" name="description" placeholder="Post"
                class="w-full h-60 text-l rounded-lg shadow-lg border-b p-16 mb-5 mt-4"></textarea>
            <div class="py-16 flex justify-center">
                <button
                    class="
                    text-gray-700 hover:text-white
                     bg-gray-400 hover:bg-gray-700
                     opacity-75 hover:opacity-100
                 transition duration-300
                  cursor-pointer py-5 px-6 rounded-lg
                  font-bold uppercase">
                    <span>Select an Image to Upload</span>
                    <input type="file" name="image" class="hidden">
                </button>
            </div>

            <a href=''
                class="bg-gray-700 py-3 px-5 text-gray-100 rounded-lg uppercase text-lg place-self-start mt-4"><input
                    type="submit" value="Submit Post"></a>
        </form>
    </div>
@endsection

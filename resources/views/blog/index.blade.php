@extends('layouts.app')

@section('content')
    <div class=" container m-auto text-center pt-16 pb-5 ">
        <h2 class="text-6xl text-gray-700 important font-bold">All Posts</h2>
    </div>

    @foreach ($posts as $post )
    <div class="sm:grid grid-cols-2 gap-16 mx-auto py-16 px-5 border-b border-gray-300 ">
        <div class="flex">
            <img class="object-cover" src="{{$post->image_path}}" alt="">

        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2>
            <div>By: <span class="italic text-gray-500">{{$post->user->name}}</span></div>
            <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>
            <a href="/blog/{{$post->slug}}"
                class="bg-gray-700 py-3 px-5 text-gray-100 rounded-lg uppercase text-lg place-self-start mt-4">read more</a>
        </div>
    </div>

    @endforeach

@endsection

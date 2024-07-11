@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <div class="hero-bg-img flex flex-col justify-center items-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome To LaraBlog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/60/960/620" alt="">
        </div>
        <div class="flex flex-col justify-center items-left m-10 sm:m-0">
            <h2 class="font-bold text-bold text-gray-700 text-4xl uppercase">Becoming a Web Developer</h2>
            <p class="font-bold text-bold text-gray-700 text-xl pt-2">Master HTML, CSS, and JavaScript to build responsive,
                interactive websites.</p>
            <p class="py-4 text-gray-500 text-sm leading-5">Learn backend languages like PHP, Python, or Node.js, and
                utilize frameworks and libraries. Practice regularly, build projects, and engage in continuous learning.
                Networking and joining developer communities can also accelerate your journey to becoming a skilled web
                developer.</p>
            <a href="/"
                class="bg-gray-700 py-3 px-5 text-gray-100 rounded-lg uppercase text-lg place-self-start mt-4">read more</a>
        </div>
    </div>
    {{-- blog categories --}}
    <div class="text-center py-16 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4 ">
            <p class="font-bold text-3xl py-2 text-yellow-200">Ux Design</p>
            <p class="font-bold text-3xl py-2 text-red-200">Programming Languages</p>
            <p class="font-bold text-3xl py-2 text-blue-200">Front End Dev</p>
            <p class="font-bold text-3xl py-2 text-green-200">Back End Dev</p>
        </div>
    </div>
    {{-- recent Posts --}}
    <div class="container mx-auto text-center py-14">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">Laravel is a popular PHP framework that simplifies web application
            development with its elegant syntax and MVC
            architecture. It features a powerful ORM called Eloquent, built-in authentication, and comprehensive routing
            capabilities. Laravel’s Blade templating engine facilitates dynamic, reusable views, while tools for testing,
            task scheduling, and database migrations streamline the development process. Its vibrant ecosystem, including
            Laravel Forge and Envoyer, aids in deployment and server management. With extensive documentation and a
            supportive community, Laravel is ideal for developers looking for a framework that combines performance,
            scalability, and ease of use.</p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-blue-950 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-16 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-blue-500 text-blue-950 p-2 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-300 transition duration-300"><a href="/">React</a></li>
                    <li class="bg-blue-500 text-blue-950 p-2 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-300 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-blue-500 text-blue-950 p-2 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-300 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-blue-500 text-blue-950 p-2 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-300 transition duration-300"><a href="/">Front End</a></li>
                </ul>
                <h3 class="text-l py-10 leading-6">
                    React is a JavaScript library for building dynamic user interfaces with a component-based architecture
                    and a virtual DOM for efficient updates. Redux is a state management library that provides a single
                    source of truth, making state changes predictable and easier to debug. Together, they enable scalable
                    and maintainable web applications.
                </h3>
                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block hover:text-white hover:bg-blue-900 transition duration-500 ">Read More</a>
            </div>
        </div>
        <div class="flex">
             <img  class="object-cover" src="https://picsum.photos/id/227/960/620" alt="">
        </div>
    </div>
@endsection

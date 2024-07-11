@extends('layouts.app')

@section('content')
    <div class=" container m-auto text-center pt-16 pb-5 ">
        <h2 class="text-6xl text-gray-700 important font-bold">All Posts</h2>
    </div>
    <div class="sm:grid grid-cols-2 gap-16 mx-auto py-16 px-5 border-b border-gray-300 ">
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/327/960/620" alt="">

        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">How To Simply Create A Blog With Laravel</h2>
            <div>By: <span class="italic text-gray-500">Anwar Elaajabi</span></div>
            <p class="text-l text-gray-700 py-8 leading-6">Laravel is a popular PHP web framework known for its elegant
                syntax and robust features that streamline web
                development. Created by Taylor Otwell in 2011, it follows the Model-View-Controller (MVC) architectural
                pattern, promoting organized and reusable code. Laravel simplifies common tasks such as routing,
                authentication, and caching, enabling developers to focus on building feature-rich applications. Its
                built-in tools like Eloquent ORM for database management, Blade templating engine, and powerful migration
                system make it highly efficient. Laravel's extensive documentation and vibrant community support foster a
                rich ecosystem of packages and resources, making it a go-to choice for both beginners and experienced
                developers.</p>
            <a href="/"
                class="bg-gray-700 py-3 px-5 text-gray-100 rounded-lg uppercase text-lg place-self-start mt-4">read more</a>
        </div>
    </div>
@endsection

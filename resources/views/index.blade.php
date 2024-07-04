@extends('layouts.app')

@section('content')

<style>
    .hero-bg-img{
        background: url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center /cover;
        background-attachment: fixed;
        height: 600px;
    }
</style>

    <div class="hero-bg-img flex flex-col justify-center items-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcome To LaraBlog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>
@endsection

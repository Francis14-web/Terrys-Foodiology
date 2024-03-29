@extends('layouts.main')

@section('title', "Terry's Foodiology")

@section('content')

<nav class="flex justify-between items-center bg-white fixed w-full top-0 left-0 right-0 z-10 px-4 py-5">
    <img class="sm:w-48 w-32 h-auto" src="{{ asset('img/white.jpg')}}">
    <ul class="flex sm:gap-5 gap-2 list-none">
        <li>
            <a href="{{ route('user.login') }}" class="px-2 py-1 sm:px-4 sm:py-2 text-[10px] sm:text-base border border-green-700 rounded-full text-green-700 hover:bg-black/10">Log in</a>
        </li>
        <li>
            <a href="{{ route('user.register') }}" class="px-2 py-1 sm:px-4 sm:py-2 text-[10px] sm:text-base bg-green-700 border border-green-700 rounded-full text-white hover:bg-green-900">Sign up</a>
        </li>
    </ul>
</nav>
<div id="seclanding" class="flex flex-col mx-4  sm:flex sm:flex-row justify-evenly items-center h-screen">
	<div class="context px-8 max-w-xl">
		<h1 class="text-green-800 text-6xl font-bold leading-none mt-4 sm:mt-24 p-2">Fresh food for <br>growing minds!</h1>

		<p class="block text-gray-800 text-md my-8">We provide a convenient and efficient way for you to place food orders and reserve
			food at our canteen.</p>
		<a href="#viewOffer" class="scroll-smooth block viewbut border border-green-800 text-green-800 py-2 px-6 text-sm font-bold rounded-full hover:bg-green-800 hover:text-white w-fit">View Offer </a>
	</div>
    <div class="w-auto sm:block hidden">
        <img src="{{ asset('img/logo.png')}}" alt="Hero Image">
    </div>
	
</div>

<div class="description flex flex-col items-center text-center py-20 bg-green-800 px-4">
    <div class="max-w-4xl">
        <p class="hdecs text-gray-100 text-4xl font-bold mb-10">Eat well, Learn Better!</p>
        <p class="desc text-gray-100 text-lg mb-10">"We provide a convenient and efficient way for you to place food
            orders and reserve food at our canteen. With our easy-to-use platform,
            you can browse through our menu options, customize your orders, and choose your preferred pickup time. Our website is designed to make your
            canteen experience as enjoyable and stress-free as possible.
            Whether you're a busy student, working professional, or guest, our online platform makes it easy for you to access great food and service at your convenience.
            <b><i>Thank you for choosing our canteen ordering and reservation website!"</b></i>
        </p>
    </div>
	
</div>

<div id="viewOffer" class="text-center max-w-6xl my-20 mx-auto ">
    <h1 class="text-4xl font-bold text-green-700 mb-10">Terry's Foodiology Offer</h1>
    <div class="grid sm:grid-cols-3 gap-10 px-8">
        <div class="food-view rice">
            <img class="rounded-lg max-h-72 h-full w-full object-cover" src="{{ asset('img/Rice.jpg') }}" alt="Rice Meal">
            <p class="text-lg tracking-widest  text-green-800 mt-2">RICE MEAL</p>
        </div>
        <div class="food-view sandwich">
            <img class="rounded-lg max-h-72 h-full w-full object-cover" src="{{ asset('img/Sandwich.jpg') }}" alt="Sandwich">
            <p class="text-lg tracking-widest  text-green-800 mt-2">SANDWICH</p>
        </div>
        <div class="food-view pasta">
            <img class="rounded-lg max-h-72 h-full w-full object-cover" src="{{ asset('img/Pasta.jpg') }}" alt="Pasta">
            <p class="text-lg tracking-widest  text-green-800 mt-2">PASTA</p>
        </div>
        <div class="food-view Snacks">
            <img class="rounded-lg max-h-72 h-full w-full object-cover" src="{{ asset('img/Snacks.jpg') }}" alt="Snacks">
            <p class="text-lg tracking-widest  text-green-800 mt-2">SNACKS</p>
        </div>
        <div class="food-view Coffee">
            <img class="rounded-lg max-h-72 h-full w-full object-cover" src="{{ asset('img/Coffee.jpg') }}" alt="Coffee">
            <p class="text-lg tracking-widest  text-green-800 mt-2">COFFEE</p>
        </div>
        <div class="food-view Drinks">
            <img class="rounded-lg max-h-72 h-full w-full object-cover" src="{{ asset('img/Drinks.jpg') }}" alt="Drinks">
            <p class="text-lg tracking-widest  text-green-800 mt-2">DRINKS</p>
        </div>
    </div>
    </div>
    <x-footer />

@endsection

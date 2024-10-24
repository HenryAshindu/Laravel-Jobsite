@php use Illuminate\Support\Facades\vite; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs Corner</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{vite::asset('resources/images/logo.svg') }}" alt="Jobs Corner">
            </a>
        </div>
        <div class="space-x-12 font-semibold">
            <a href="/jobs">Home</a>
            <a href="{{ route('jobs.create')}}">Post</a>
        </div>

        @auth
         <div class="space-x-6 font-bold flex">
            <a href="{{url('jobs/create')}}">Post a Job</a>

            <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button>Log Out</button>
                
            </form>
         </div>
        @endauth

        @guest
        <div class="space-x-4 font-semibold">
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
        </div>
        @endguest

    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}
    </main>
</div>
</body>
</html>


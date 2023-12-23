<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Password Reset</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-gray-50 h-screen flex justify-center items-center">
    <div class="bg-white rounded shadow-lg p-8 max-w-md w-full">
        <div class="flex items-end justify-center mb-5 text-2xl font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 class="w-6 h-6 text-indigo-600 fill-current">
                <path
                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.4267 20 20 16.4267 20 12C20 7.57333 16.4267 4 12 4C7.57333 4 4 7.57333 4 12C4 16.4267 7.57333 20 12 20ZM12 18C8.68 18 6 15.32 6 12C6 8.68 8.68 6 12 6C15.32 6 18 8.68 18 12C18 15.32 15.32 18 12 18ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z">
                </path>
            </svg>
            Royal<span class="text-indigo-600">.co</span>
        </div>
        <h1 class="text-center text-gray-700 text-2xl font-semibold">Reset Password</h1>
        <form action="{{route('reset.password.post')}}" method="POST">
            @csrf
            <input type="text" name="token" id="" hidden value="{{$token}}">
            <div class="mb-3">
                <label for="" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="" placeholder="Email"
                       class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
                @if($errors->has('email'))
                    <div class="text-red-700 ms-2">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="block text-gray-700">Enter new password</label>
                <input type="password" name="password" id="" placeholder="Password"
                       class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
                @if($errors->has('password'))
                    <div class="text-red-700 ms-2">
                        {{$errors->first('password')}}
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="" class="block text-gray-800">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="" placeholder="Confirm Password"
                               class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
                        @if($errors->has('password_confirmation'))
                            <div class="text-red-700 ms-2">
                                {{$errors->first('password_confirmation')}}
                            </div>
                        @endif
                    </div>
                    <div class="mt-3">
                        <button
                            class="transition delay-150 ease-in-out bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 duration-300 rounded w-full p-3 text-white">
                            Reset Password
                        </button>
                    </div>
                    @if(session()->has('message'))
                        <div class="border border-green-700 bg-green-300 text-green-700 rounded p-3 text-center mt-3">
                            {{session('message')}}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="border border-red-700 bg-red-300 text-red-700 rounded p-3 text-center flex flex-nowrap mt-3">
                            {{session('error')}}
                        </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>
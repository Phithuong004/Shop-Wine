<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Password Reset</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/3.png') }}">
</head>
<body>
<main id="content" role="main" class="w-full h-screen max-w-xl p-6 mx-auto ">
    <div class="py-12 bg-white border shadow-lg mt-7 rounded-xl">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <div class="flex items-end justify-center mb-12 text-2xl font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="w-6 h-6 text-indigo-600 fill-current">
                        <path
                            d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.4267 20 20 16.4267 20 12C20 7.57333 16.4267 4 12 4C7.57333 4 4 7.57333 4 12C4 16.4267 7.57333 20 12 20ZM12 18C8.68 18 6 15.32 6 12C6 8.68 8.68 6 12 6C15.32 6 18 8.68 18 12C18 15.32 15.32 18 12 18ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z">
                        </path>
                    </svg>
                    Royal<span class="text-indigo-600">.co</span>
                </div>
                <h1 class="block mb-2 text-xl font-bold text-gray-800">Successful Password Reset!</h1>
                <p class="mb-12 text-gray-800">You can now use your new password to <br> log in to your account! 🙌
                </p>
            </div>

            <div class="px-4 mx-auto text-center sm:px-7">
                <a href="{{route('login')}}"
                        class="inline-flex items-center justify-center w-full gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 duration-300 ease-in-out">Login</a>
            </div>
        </div>
    </div>
</main>
</body>
</html>

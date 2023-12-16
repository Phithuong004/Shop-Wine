<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Forgot Password</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: "Nunito", sans-serif;
            background-color: #e9ecef;
        }
    </style>
</head>
<body class="font-mono bg-gray-100">
<div class="container mx-auto">
    <div class="flex justify-center items-center h-screen px-6">
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <div
                class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                style="background-image: url('https://img.freepik.com/free-vector/background-wine-with-cheese-bread-flat-design_23-2147570514.jpg?w=826&t=st=1702657683~exp=1702658283~hmac=0768f52545151f94697195d276b92245da344255cc04532856252675b2905f02')"></div>
            <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                <div class="px-8 mb-4 text-center">
                    <h3 class="pt-4 mb-2 text-2xl">Forgot Your Password?</h3>
                    <p class="mb-4 text-sm text-gray-700">
                        We get it, stuff happens. Just enter your email address below and we'll send you a
                        link to reset your password!
                    </p>
                </div>
                <form method="POST" action="{{route('forget.password')}}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:ring focus:ring-gray-800 transition-all duration-150 ease-in-out"
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Enter Email Address..."/>
                        @if($errors->has('email'))
                            <p class="text-red-500">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline transition-all duration-300 ease-in-out"
                            type="submit">
                            Reset Password
                        </button>
                    </div>
                    <hr class="mb-6 border-t"/>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="{{route('signup')}}">
                            Create an Account!
                        </a>
                    </div>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="{{route('login')}}">
                            Already have an account? Login!
                        </a>
                    </div>
                    @if(Session::has('message'))
                        <div id="modal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"
                             role="dialog" aria-modal="true">
                            <div
                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                     aria-hidden="true"></div>
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                      aria-hidden="true">&#8203;</span>
                                <div
                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-lg leading-6 font-medium text-green-500 flex"
                                                    id="modal-title">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                    Success
                                                </h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">
                                                        {{ Session::get('message') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button id="closeModal" type="button"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        if (modal.style.display === 'none') {
            modal.classList.remove('modal-closed');
            modal.classList.add('modal-open');
        }

        closeModal.addEventListener('click', function () {
            modal.classList.remove('modal-open');
            modal.classList.add('modal-closed');
        });
    }
</script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto px-4">
    <h1 class="text-3xl py-4 border-b mb-10">Your Cart</h1>
    @foreach(session('cart') as $id => $details)
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
            <div class="flex w-2/5"> <!-- product image -->
                <div class="w-20">
                    <img class="h-24" src="{{ $details['picture'] }}" alt="">
                </div>
                <div class="flex-grow pl-5">
                    <h2 class="text-lg font-bold">{{ $details['name'] }}</h2>
                </div>
            </div>
            <div class="flex justify-center w-1/5">
                <input class="mx-2 border text-center w-8" type="text" value="{{ $details['quantity'] }}">
            </div>
            <div class="flex justify-center w-1/5">
                <span class="text-center w-1/5 font-medium">${{ $details['price'] }}</span>
            </div>
            <div class="flex justify-center w-1/5">
                    <a href="{{route('remove.from.cart', $id)}}"
                       class="text-red-500 hover:text-red-600 underline font-semibold">Remove</a>
            </div>
        </div>
    @endforeach
    @if(Session::has('success'))
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
                                        {{ Session::get('success') }}
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Wine Shop</title>
    <link rel="stylesheet" href="path/to/your/css/file.css">
</head>

<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .carousel {
        display: grid;
        grid-template-columns: repeat(3, 100%);
        grid-gap: 0;
        overflow: hidden;
        width: 100%;
        height: 100vh;
        position: relative;
    }

    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-item {
        width: 100%;
        height: 100%;
    }

    .carousel-button {
        position: absolute;
        top: 50%;
        font-size: 24px;
        color: white;
        cursor: pointer;
        background: none;
        border: none;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
    }

    .carousel-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ccc;
        cursor: pointer;
    }

    .carousel-indicator.active {
        background-color: #333;
    }
</style>

<body class="bg-gray-100 font-['Laila']">
<!-- Navigation -->
<nav>
    @include('navigation')
</nav>

<!-- Hero Section -->
<section class="py-20 bg-cover bg-center h-screen flex items-center justify-center z-50">
    <!-- Carousel -->
    <div class="carousel relative overflow-hidden">

        <div class="carousel-inner flex">
            <!-- Item 1 -->
            <div class="carousel-item">
                <img
                    src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.15752-9/403402162_1780640389099953_1472303949310716204_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=y1PGr8jH7UoAX-6euaP&_nc_ht=scontent.fsgn5-5.fna&oh=03_AdSdfdPA4Bw-K9DaYeG0vfikxxbyMu3Y-lrmR4tnStFs6g&oe=65A53C6E"
                    alt="Wine 1" class="w-full h-full object-cover object-center">
            </div>
            <!-- Item 2 -->
            <div class="carousel-item">
                <img
                    src="https://scontent.fsgn5-15.fna.fbcdn.net/v/t1.15752-9/385559678_6895473820546134_8535414984234801751_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=QzVm2p0LergAX8T5nw5&_nc_ht=scontent.fsgn5-15.fna&oh=03_AdTLt5rFrBZYwNUbSBofmwd4MBkx7df-zWPXFxpnEhDrYA&oe=65A545C0"
                    alt="Wine 2" class="w-full h-full object-cover object-center">
            </div>
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">❮</button>
        <button class="carousel-button next" onclick="nextSlide()">❯</button>
        <div class="carousel-indicators">
            <div class="carousel-indicator" onclick="goToSlide(0)"></div>
            <div class="carousel-indicator" onclick="goToSlide(1)"></div>
        </div>
    </div>
</section>

<!-- Product Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-10 text-center">Featured Wines</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($wines as $wine)
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:cursor-pointer transition-all duration-300 group relative">
                    <img src="{{$wine->picture}}" alt="Wine" style="width: 5em"
                         class="object-cover mx-auto w-full h-72 transform hover:scale-105">
                    <div
                        class="bg-gray-50 p-6 absolute bottom-0 shadow-lg transform transition-transform duration-300 group-hover:translate-y-0 translate-y-full w-full">
                        <h3 class="text-md font-bold mb-2">{{$wine->name}}</h3>
                        <p class="text-gray-600">{{$wine->description}}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-gray-800 font-bold">${{$wine->price}}</span>
                            <form action="{{route('add.to.cart', $wine->id)}}" method="post">
                                @csrf
                                <a href="{{route('add.to.cart', $wine->id)}}"
                                   class="bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition duration-300">
                                    Add to Cart
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(Session::has('success'))
                <div id="modal" class="fixed z-10 inset-0 overflow-y-auto"
                     aria-labelledby="modal-title"
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
                                                 class="stroke-current shrink-0 h-6 w-6 mr-2"
                                                 fill="none"
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
    </div>
    <div class="flex justify-center mt-10">
        {{ $wines->links('vendor.pagination.custom') }}
    </div>
</section>

<!-- Footer -->
<footer class="bg-black text-white py-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 LuxuryWines. All Rights Reserved.</p>
    </div>
</footer>

<!-- JavaScript for carousel -->
<script>
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselIndicators = document.querySelectorAll('.carousel-indicator');
    let currentIndex = 0;

    function showSlide(index) {
        const newTransformValue = `translateX(${-index * 100}%)`;
        carouselInner.style.transform = newTransformValue;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % 2;
        updateIndicators();
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex + 1) % 2;
        updateIndicators();
        showSlide(currentIndex);
    }

    function goToSlide(index) {
        currentIndex = index;
        updateIndicators();
        showSlide(currentIndex);
    }

    function updateIndicators() {
        carouselIndicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    window.onload = function () {
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        if (modal && closeModal) {
            if (modal.style.display === 'none') {
                modal.classList.remove('modal-closed');
                modal.classList.add('modal-open');
            }

            closeModal.addEventListener('click', function () {
                modal.classList.remove('modal-open');
                modal.classList.add('modal-closed');
            });
        }
    }
</script>
</body>
</html>

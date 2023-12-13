<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Wine Shop</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

<!-- Navigation -->
<nav>
    <div class="navbar bg-[#b5a46d] text-white" id="navbar">
        <div class="navbar-start">
            <ul class="flex space-x-14 ms-5 tex-lg font-semibold">
                <li><a class="" href="">Add to cart</a></li>
                <li><a href="">Checkout</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
        <div class="navbar navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle text-white">
                    <div class="indicator ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </div>
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                             src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"/>
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    @include('navigation')
</nav>

<!-- Hero Section -->
<section class="py-20 bg-cover bg-center h-screen flex items-center justify-center z-50"
         style="background-image: url('https://i.pinimg.com/originals/48/a1/c3/48a1c3c3a2c198a7773500c5583ffc9f.jpg');">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold text-white mb-4">Indulge in Luxury Wines</h1>
        <p class="text-lg text-white">Discover a collection of exquisite wines from renowned vineyards.</p>
        <a href="#"
           class="mt-8 bg-white text-black py-3 px-8 rounded-full inline-block hover:bg-gray-300 transition duration-300">Explore
            Our Wines</a>
    </div>
</section>

<!-- Product Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-10 text-center">Featured Wines</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Sample Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/originals/48/a1/c3/48a1c3c3a2c198a7773500c5583ffc9f.jpg" alt="Wine"
                     class="w-full h-72 object-cover object-center">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Premium Red Wine</h3>
                    <p class="text-gray-600">Elegant and rich flavor profile that delights the senses.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gray-800 font-bold">$99.99</span>
                        <button
                            class="bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more product cards here -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-black text-white py-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 LuxuryWines. All Rights Reserved.</p>
    </div>
</footer>

</body>

</html>


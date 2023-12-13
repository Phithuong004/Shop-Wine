<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Wine Shop</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-mono">
<!-- Navigation -->
<nav>
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

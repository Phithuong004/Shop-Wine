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

<body class="bg-gray-100 font-mono">
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
                    <img src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.15752-9/403402162_1780640389099953_1472303949310716204_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=y1PGr8jH7UoAX-6euaP&_nc_ht=scontent.fsgn5-5.fna&oh=03_AdSdfdPA4Bw-K9DaYeG0vfikxxbyMu3Y-lrmR4tnStFs6g&oe=65A53C6E"
                        alt="Wine 1" class="w-full h-full object-cover object-center">
                </div>
                <!-- Item 2 -->
                <div class="carousel-item">
                    <img src="https://scontent.fsgn5-15.fna.fbcdn.net/v/t1.15752-9/385559678_6895473820546134_8535414984234801751_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=QzVm2p0LergAX8T5nw5&_nc_ht=scontent.fsgn5-15.fna&oh=03_AdTLt5rFrBZYwNUbSBofmwd4MBkx7df-zWPXFxpnEhDrYA&oe=65A545C0"
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
    </script>
</body>

</html>
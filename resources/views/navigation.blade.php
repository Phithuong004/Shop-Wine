<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="navbar bg-gray-900">
<div class="text-white flex justify-between">
    <a class="btn btn-ghost text-xl ">Royal Terroir</a>
    <div class="dropdown float-right" id="sidebarButton">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
            </svg>
        </div>
    </div>
</div>    <div class="navbar-center hidden lg:flex text-2xl font-semibold">
        <ul class="menu menu-horizontal px-1 text-white ">
            <li><a>Home</a></li>
            <li>
                <details class="">
                    <summary>About</summary>
                    <ul class="p-2 text-black">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
            <li><a>Contact</a></li>
        </ul>
    </div>
</div>
{{-- <section>
    <img src="https://wallpapers.com/images/featured/wine-p47wlbkcyeefrycb.jpg" class="max-h-screen object-fill w-full" alt="">
</section> --}}
<aside id="">
    <div class="h-screen w-72 bg-gray-900 shadow-lg fixed top-0 left-0 z-50 sidebar-hidden rounded-r-xl" id="sidebar">
        <div class="flex justify-center">
            <h1 class="text-center text-white text-3xl py-7">Royal Terroir</h1>
            <button class="text-white ms-5 mt-2 hover:text-red-500 duration-150 ease-in-out transition-all"
                    id="closeSidebarButton">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-11.293a1 1 0 00-1.414 0l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293a1 1 0 000-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
        <ul class="text-xl mt-8">
            <li>
                <a href="/home" class="block py-3 px-6 text-blue-500 hover:text-blue-700 transition duration-300">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
            </li>
            <li>
                <a href="/about" class="block py-3 px-6 text-blue-500 hover:text-blue-700 transition duration-300">
                    <i class="fas fa-info-circle mr-2"></i> About
                </a>
            </li>
            <li>
                <a href="/contact" class="block py-3 px-6 text-blue-500 hover:text-blue-700 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i> Contact
                </a>
            </li>
            <li>
                <a href="/more" class="block py-3 px-6 text-blue-500 hover:text-blue-700 transition duration-300">
                    <i class="fas fa-ellipsis-h mr-2"></i> More
                </a>
            </li>
        </ul>
    </div>
    <div id="overlay"
         class="fixed inset-0 bg-black opacity-0 pointer-events-none transition-opacity duration-500 ease-in-out"></div>
</aside>
<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const sidebarButton = document.getElementById('sidebarButton');
    sidebarButton.addEventListener('click', () => {
        sidebar.classList.add('sidebar-visible');
        overlay.classList.remove('opacity-0');
        overlay.classList.add('opacity-50', 'pointer-events-auto');
    });
    const closeSidebarButton = document.getElementById('closeSidebarButton');
    closeSidebarButton.addEventListener('click', () => {
        sidebar.classList.remove('sidebar-visible');
        overlay.classList.remove('opacity-50', 'pointer-events-auto');
        overlay.classList.add('opacity-0');
    });
</script>
</body>
</html>

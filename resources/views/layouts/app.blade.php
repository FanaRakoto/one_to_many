<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Bienvenue | accueil')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <header>
<nav class="bg-slate-900 border-b border-slate-800 shadow-lg">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

        <!-- Logo -->
        <div class="flex items-center gap-3">
            <span class="text-4xl text-red-500">
                <i class="fab fa-battle-net"></i>
            </span>

            <h1 class="text-xl font-bold text-white">
                <span class="text-red-500">E-</span><span class="text-rose-500">Shop</span>
            </h1>
        </div>

        <!-- Menu -->
        <div class="flex items-center gap-3">

            <a href="{{ route('articles.index') }}"
                class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-800 transition duration-300">
                Home
            </a>

            <a href="#"
                class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-800 transition duration-300">
                About
            </a>

            <a href="#"
                class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-800 transition duration-300">
                Services
            </a>

            <a href="#"
                class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-800 transition duration-300">
                Contact
            </a>

        </div>

    </div>
</nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
      <section class="bg-black text-white mt-[325px]">
            <div class="flex">
                <div class="mb-[30px] flex justify-center align-center gap-100 ml-[8px]">
                    <div class="mb-[30px]">
                        <h1 class="">Company</h1>
                        <div class="">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Commande</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            
                        </div>
                    </div>        
                    
                    <div class="mb-[15px]">
                        <div class="mb-[15px]">
                            <h1 class="">Contact</h1>
                            <div class="">
                                <p>123 Street, New York, USA</p>
                                <p>+012 345 67890</p>
                                <p>info@example.com</p>
                                <p class="flex justify-center gap-2 text-white bg-transparent w-[35px] h-[35px] rounded border-white pt-[7px] mx-[15px] my-[0px] hover:text-red-500 cursor-pointer"><i class="fas fa-twitter"></i>  <i class="fas fa-facebook-f"></i>   <i class="fab fa-youtube"></i>   <i class="fab fa-linkedin-in"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="ml-[400px]">
                  <div class="mb-[30px]">
                        <h1 class="">Opening</h1>
                    <div class="">
                        <p><b>Monday - Saturday</b></p>
                        <p>09AM - 09PM</p>
                        <p><span></span><span></span></p>
                        <p><b>Sunday</b></p>
                        <p>10AM - 08PM</p>
                    </div>
                  </div>
                </div>
            </div>

            <div class="">
                        <div class="text-center">
                            <p>© <a href="#">Your Site Name,</a>All Right Reserved. Designed By<a href="#">HTML Codex</a></p>
                            <p>Distributed By <a href="#">ThemeWagon</a></p>
                        </div>
                        <div class="flex justify-center list-none gap-5">
                            <li><a href="#">Home</a><div class=""></div></li>
                            <li><a href="#">Cookies</a><div class=""></div></li>
                            <li><a href="#">Help</a><div class=""></div></li>
                            <li><a href="#">FQAs</a></li>
                        </div>   
            </div>
    </footer>
</body>

</html>
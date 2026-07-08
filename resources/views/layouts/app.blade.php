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
        <nav class="flex gap-200 bg-black">
            <div>
                <span class="text-5xl text-red-700"><i class="fab fa-battle-net"></i></span>
            </div>
            <div>
                <button class="bg-red-480 py-2 px-4 text-white text-[16px] rounded-[10px] hover:bg-red-950 cursor-pointer border-l-10 border-red-950 mr-2">Home</button>
                <button class="bg-red-480 py-2 px-4 text-white text-[16px] rounded-[10px] hover:bg-red-950 cursor-pointer border-l-10 border-red-950 mr-2">About</button>
                <button class="bg-red-480 py-2 px-4 text-white text-[16px] rounded-[10px] hover:bg-red-950 cursor-pointer border-l-10 border-red-950 mr-2">Services</button>
                <button class="bg-red-480 py-2 px-4 text-white text-[16px] rounded-[10px] hover:bg-red-950 cursor-pointer border-l-10 border-red-950 mr-2">Contact</button>
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
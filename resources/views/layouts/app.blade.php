<!DOCTYPE html>
<html class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Bienvenue | accueil')</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->
</head>

<body class="bg-slate-900 text-white font-sans antialiased dark:bg-slate-900 dark:text-white transition-colors duration-300">
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

            <button id="theme-toggle" onclick="toggleTheme()" class="p-2 rounded-xl hover:bg-slate-800 transition duration-300">
                <i class="fas fa-moon"></i>
            </button>

        </div>

    </div>
</nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-900 border-t border-slate-800 text-slate-300 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Company -->
            <div>
                <h2 class="text-lg font-bold text-white mb-4">
                    <span class="text-red-500">Company</span>
                </h2>

                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-red-400 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-red-400 transition">Contact Us</a></li>
                    <li><a href="#" class="hover:text-red-400 transition">Commande</a></li>
                    <li><a href="#" class="hover:text-red-400 transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-red-400 transition">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h2 class="text-lg font-bold text-white mb-4">
                    <span class="text-red-500">Contact</span>
                </h2>

                <div class="space-y-2">
                    <p>📍 123 Street, New York, USA</p>
                    <p>📞 +012 345 67890</p>
                    <p>✉️ info@example.com</p>

                    <div class="flex gap-3 mt-4 text-xl">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:border-red-500 hover:text-red-500 transition">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:border-red-500 hover:text-red-500 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:border-red-500 hover:text-red-500 transition">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:border-red-500 hover:text-red-500 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Opening -->
            <div>
                <h2 class="text-lg font-bold text-white mb-4">
                    <span class="text-red-500">Opening Hours</span>
                </h2>

                <div class="space-y-2">
                    <p class="font-semibold text-white">Monday - Saturday</p>
                    <p>09:00 AM - 09:00 PM</p>

                    <p class="font-semibold text-white mt-4">Sunday</p>
                    <p>10:00 AM - 08:00 PM</p>
                </div>
            </div>

        </div>

        <div class="border-t border-slate-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">

            <p class="text-sm text-slate-400">
                © {{ date('Y') }}
                <span class="text-red-500 font-semibold">List Article</span>.
                Tous droits réservés.
            </p>

            <div class="flex gap-6 text-sm">
                <a href="#" class="hover:text-red-400 transition">Home</a>
                <a href="#" class="hover:text-red-400 transition">Cookies</a>
                <a href="#" class="hover:text-red-400 transition">Help</a>
                <a href="#" class="hover:text-red-400 transition">FAQs</a>
            </div>

        </div>

    </div>
</footer>
</body>

<script>
const themeToggle = document.getElementById("theme-toggle");

function updateTheme(isDark) {
    document.documentElement.classList.toggle("dark", isDark);

    if (themeToggle) {
        themeToggle.innerHTML = isDark
            ? '<i class="fas fa-sun"></i>'
            : '<i class="fas fa-moon"></i>';
    }
}

// Charger le thème sauvegardé
const savedTheme = localStorage.getItem("theme");

if (savedTheme) {
    updateTheme(savedTheme === "dark");
} else {
    updateTheme(window.matchMedia("(prefers-color-scheme: dark)").matches);
}

// Clic sur le bouton
if (themeToggle) {
    themeToggle.addEventListener("click", () => {
        const isDark = !document.documentElement.classList.contains("dark");

        updateTheme(isDark);

        localStorage.setItem("theme", isDark ? "dark" : "light");
    });
}

// Changement du thème système
window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (e) => {
    if (!localStorage.getItem("theme")) {
        updateTheme(e.matches);
    }
});
</script>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fbf7f2">
    <title>STARINC | Beauty in your own glow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root { color-scheme: light; }
        html { scroll-behavior: smooth; }
        body { background: #fbf7f2; color: #332c31; }
        ::selection { background: #ead4dc; color: #4a2638; }
        dialog[open] { animation: dialog-in 180ms ease-out; }
        @keyframes dialog-in {
            from { opacity: 0; transform: translateY(10px) scale(.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen antialiased">

    <!-- Header / Navbar -->
    <header class="bg-[#fbf7f2]/90 border-b border-[#e9dfd6] sticky top-0 z-50 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 py-3 flex flex-col sm:flex-row justify-between items-center gap-3">
            <a href="{{ route('home') }}" class="inline-flex items-center" aria-label="STARINC - Home">
                <img
                    src="{{ asset('images/starinc-logo.png') }}"
                    alt="STARINC"
                    class="w-32 h-12 object-contain"
                >
            </a>
            <nav class="flex flex-wrap justify-center gap-1 text-sm font-semibold text-[#615760]" aria-label="Navigasi utama">
                <a href="{{ route('home') }}" @class(['px-4 py-2 rounded-full transition', 'bg-[#4b2940] text-white shadow-sm' => request()->routeIs('home'), 'hover:bg-[#f0e7e1] hover:text-[#4b2940]' => !request()->routeIs('home')])>Beranda</a>
                <a href="{{ route('about') }}" @class(['px-4 py-2 rounded-full transition', 'bg-[#4b2940] text-white shadow-sm' => request()->routeIs('about'), 'hover:bg-[#f0e7e1] hover:text-[#4b2940]' => !request()->routeIs('about')])>Tentang</a>
                <a href="{{ route('products') }}" @class(['px-4 py-2 rounded-full transition', 'bg-[#4b2940] text-white shadow-sm' => request()->routeIs('products'), 'hover:bg-[#f0e7e1] hover:text-[#4b2940]' => !request()->routeIs('products')])>Produk</a>
                <a href="{{ route('blog') }}" @class(['px-4 py-2 rounded-full transition', 'bg-[#4b2940] text-white shadow-sm' => request()->routeIs('blog'), 'hover:bg-[#f0e7e1] hover:text-[#4b2940]' => !request()->routeIs('blog')])>Berita</a>
                <a href="{{ route('contact') }}" @class(['px-4 py-2 rounded-full transition', 'bg-[#4b2940] text-white shadow-sm' => request()->routeIs('contact'), 'hover:bg-[#f0e7e1] hover:text-[#4b2940]' => !request()->routeIs('contact')])>Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#35232f] text-[#eee5e8] py-12 mt-16">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <h3 class="text-xl font-bold tracking-[0.18em] mb-3">STARINC</h3>
                <p class="text-sm text-[#cbbdc5] leading-relaxed max-w-xs">Temukan cara sederhana untuk merawat dan merayakan kulitmu setiap hari.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-3 text-white">Jelajahi</h4>
                <ul class="space-y-2 text-sm text-[#cbbdc5]">
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">Tentang STARINC</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-white transition">Produk</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-white transition">Berita & Tips</a></li>
                    <li><a href="{{ route('legal') }}" class="hover:text-white transition">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-3 text-white">Mari terhubung</h4>
                <p class="text-sm text-[#cbbdc5]">Email: info@starinc.id</p>
                <p class="text-sm text-[#cbbdc5] mt-1">Instagram: @starinc.official</p>
                <a href="{{ route('contact') }}" class="inline-block mt-4 text-sm font-semibold text-[#f2b8a2] hover:text-white transition">Hubungi kami &rarr;</a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 sm:px-8 text-xs text-[#b8a8b1] border-t border-white/10 mt-10 pt-5">
            &copy; {{ date('Y') }} STARINC. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
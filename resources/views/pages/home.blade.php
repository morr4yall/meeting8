@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-5 sm:px-8 py-10 md:py-16">
    <!-- Hero Banner -->
    <div class="relative isolate overflow-hidden bg-gradient-to-br from-[#4b2940] via-[#693c59] to-[#a45e68] rounded-[2rem] p-7 sm:p-10 md:p-14 text-white grid md:grid-cols-[1.05fr_.95fr] items-center gap-10 shadow-[0_24px_70px_rgba(74,38,56,.18)]">
        <div class="absolute -top-24 -left-20 w-72 h-72 rounded-full bg-[#e6a991]/10 blur-2xl -z-10"></div>
        <div class="absolute -bottom-28 right-1/3 w-80 h-80 rounded-full bg-[#e6a991]/10 blur-3xl -z-10"></div>
        <div class="space-y-6 max-w-xl">
            <span class="inline-flex items-center gap-2 bg-white/10 text-[#f6d5c7] text-xs px-4 py-2 rounded-full uppercase tracking-[0.18em] font-semibold border border-white/10">
                <span class="w-1.5 h-1.5 rounded-full bg-[#f2b8a2]"></span> Pilihan STARINC
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-[1.05] tracking-tight">{{ $featuredProduct['name'] }}</h1>
            <p class="text-[#f4e8e9] text-lg md:text-xl leading-relaxed">{{ $featuredProduct['tagline'] }}</p>
            <p class="text-[#f2c7b9] text-sm font-semibold tracking-wide">{{ $featuredProduct['slogan'] }}</p>
            <a href="{{ route('products') }}" class="inline-flex items-center gap-3 bg-[#f4d0be] text-[#4b2940] px-7 py-3.5 rounded-full font-bold hover:bg-white transition shadow-lg">
                Kenali produknya <span aria-hidden="true">&rarr;</span>
            </a>
        </div>

        <div class="w-full max-w-lg mx-auto rounded-[2rem] bg-white/10 p-3 sm:p-4 border border-white/15 shadow-[0_25px_50px_rgba(0,0,0,.2)] rotate-1">
            <div class="bg-[#f0d7b4] rounded-[1.5rem] overflow-hidden h-72 sm:h-[24rem] relative">
                <img
                    src="{{ $featuredProduct['image'] }}"
                    alt="{{ $featuredProduct['name'] }}"
                    class="w-full h-full object-cover hover:scale-105 transition duration-700"
                    loading="lazy"
                >
                <div class="absolute inset-x-0 bottom-0 p-5 bg-gradient-to-t from-[#3a202e]/60 to-transparent">
                    <span class="text-white/90 text-sm">Perawatan praktis, di mana pun kamu berada</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Ingredients Highlight -->
    <div class="text-center mb-8">
        <span class="text-xs uppercase tracking-[0.2em] font-bold text-[#a5686c]">Formula pilihan</span>
        <h2 class="text-3xl md:text-4xl font-bold text-[#3d3038] mt-2">Kandungan Utama</h2>
        <p class="text-[#746a70] mt-2">{{ $featuredProduct['name'] }}</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach($featuredProduct['ingredients'] as $ing)
            <div class="group bg-white p-6 rounded-2xl border border-[#eee2dc] shadow-[0_8px_24px_rgba(65,42,52,.04)] text-center hover:-translate-y-1 hover:shadow-lg transition duration-300">
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#f8e9e2] text-[#a45e68] text-xs font-bold mb-4">✦</span>
                <h3 class="font-bold text-[#4b2940] text-lg mb-2">{{ $ing['title'] }}</h3>
                <p class="text-[#746a70] text-sm leading-relaxed">{{ $ing['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection
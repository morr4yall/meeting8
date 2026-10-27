@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto px-5 sm:px-8 py-12 md:py-16">
    <div class="text-center mb-10 md:mb-14">
        <span class="text-xs uppercase tracking-[0.2em] font-bold text-[#a5686c]">Cerita & inspirasi</span>
        <h1 class="text-3xl md:text-5xl font-bold text-[#3d3038] mt-3">Berita & Tips</h1>
        <p class="text-[#746a70] mt-4">Temukan inspirasi sederhana untuk rutinitas perawatanmu.</p>
    </div>
    
    <div class="space-y-5">
        @foreach($posts as $post)
            <article class="bg-white p-6 sm:p-8 rounded-[1.5rem] border border-[#eee2dc] shadow-[0_10px_35px_rgba(65,42,52,.05)]">
                <span class="text-[11px] uppercase tracking-[0.16em] text-[#a5686c] font-bold">{{ $post['date'] }}</span>
                <h2 class="text-xl md:text-2xl font-bold text-[#3d3038] mt-2 mb-3">{{ $post['title'] }}</h2>
                <p class="text-[#746a70] text-sm leading-relaxed mb-5">{{ $post['snippet'] }}</p>
                <details class="group">
                    <summary class="cursor-pointer list-none text-[#7b435c] text-sm font-bold hover:text-[#a45e68] transition">
                        Baca selengkapnya
                        <span class="group-open:hidden" aria-hidden="true">&rarr;</span>
                        <span class="hidden group-open:inline" aria-hidden="true">&uarr;</span>
                    </summary>
                    <div class="mt-4 space-y-3 text-[#746a70] text-sm leading-relaxed">
                        @foreach($post['content'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                </details>
            </article>
        @endforeach
    </div>
</section>
@endsection
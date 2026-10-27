@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-5 sm:px-8 py-12 md:py-16">
    <div class="text-center max-w-2xl mx-auto mb-10 md:mb-14">
        <span class="text-xs uppercase tracking-[0.2em] font-bold text-[#a5686c]">Ritual kecantikanmu</span>
        <h1 class="text-3xl md:text-5xl font-bold text-[#3d3038] mt-3">Produk STARINC</h1>
        <p class="text-[#746a70] mt-4 leading-relaxed">Kenali rangkaian pilihan untuk menemani perawatan dan rasa percaya dirimu.</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-8">
        @foreach($products as $p)
            <article class="group bg-white rounded-[1.5rem] border border-[#eee2dc] overflow-hidden shadow-[0_10px_35px_rgba(65,42,52,.06)] flex flex-col hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(65,42,52,.12)] transition duration-300">
                @if($p['image'])
                    <div class="overflow-hidden bg-[#f5ede7]">
                        <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}" class="w-full h-64 object-cover group-hover:scale-105 transition duration-500" loading="lazy">
                    </div>
                @else
                    <div class="w-full h-64 bg-[#f5ede7] flex items-center justify-center text-[#8b727f] text-sm">Foto resmi belum tersedia</div>
                @endif
                <div class="p-6 flex flex-col flex-grow items-start">
                    <span class="text-[11px] font-bold text-[#a5686c] uppercase tracking-[0.16em]">{{ $p['category'] }}</span>
                    <h2 class="text-xl font-bold text-[#3d3038] mt-2 mb-2">{{ $p['name'] }}</h2>
                    <p class="text-[#746a70] text-sm leading-relaxed mb-5">{{ $p['description'] }}</p>
                    @if($p['size'])
                        <span class="inline-block bg-[#f8efeb] text-[#795160] text-xs px-3 py-1.5 rounded-full">Ukuran: {{ $p['size'] }}</span>
                    @endif
                    <button
                        type="button"
                        data-product-dialog="product-detail-{{ $loop->index }}"
                        class="mt-auto pt-6 text-[#7b435c] text-sm font-bold hover:text-[#a45e68] transition"
                    >
                        Lihat detail <span aria-hidden="true">&rarr;</span>
                    </button>
                </div>
            </article>

            <dialog id="product-detail-{{ $loop->index }}" class="w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto rounded-[1.5rem] p-0 shadow-2xl backdrop:bg-[#2f1e2a]/65">
                <div class="grid md:grid-cols-2">
                    @if($p['image'])
                        <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}" class="w-full h-64 md:h-full object-cover">
                    @else
                        <div class="w-full h-64 md:h-full min-h-64 bg-purple-50 flex items-center justify-center text-purple-700 text-sm">Foto resmi belum tersedia</div>
                    @endif
                    <div class="p-6 md:p-8">
                        <span class="text-[11px] font-bold text-[#a5686c] uppercase tracking-[0.16em]">{{ $p['category'] }}</span>
                        <h2 class="text-2xl font-bold text-[#3d3038] mt-2 mb-4">{{ $p['name'] }}</h2>
                        <p class="text-[#746a70] leading-relaxed mb-5">{{ $p['description'] }}</p>
                        @if($p['size'])
                            <p class="text-sm text-[#51484e]"><strong>Ukuran:</strong> {{ $p['size'] }}</p>
                        @endif
                        @if(!empty($p['bpom']))
                            <p class="text-sm text-[#51484e] mt-2"><strong>BPOM:</strong> {{ $p['bpom'] }}</p>
                        @endif
                        @if(!empty($p['price']))
                            <p class="text-sm text-[#51484e] mt-2"><strong>Harga:</strong> {{ $p['price'] }}</p>
                        @endif
                        @if(!empty($p['scent']))
                            <p class="text-sm text-[#51484e] mt-2"><strong>Aroma:</strong> {{ $p['scent'] }}</p>
                        @endif
                        @if(count($p['ingredients']))
                            <div class="mt-5">
                                <h3 class="font-semibold text-[#3d3038]">Kandungan yang disebutkan</h3>
                                <ul class="flex flex-wrap gap-2 mt-3">
                                    @foreach($p['ingredients'] as $ingredient)
                                        <li class="bg-[#f8efeb] text-[#795160] text-xs px-3 py-1.5 rounded-full">{{ $ingredient }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty($p['benefits']))
                            <div class="mt-5">
                                <h3 class="font-semibold text-[#3d3038]">Manfaat</h3>
                                <ul class="list-disc list-inside space-y-1 mt-2 text-sm text-[#746a70]">
                                    @foreach($p['benefits'] as $benefit)
                                        <li>{{ $benefit }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty($p['usage']))
                            <div class="mt-5">
                                <h3 class="font-semibold text-[#3d3038]">Cara Pemakaian</h3>
                                <p class="text-sm text-[#746a70] mt-2">{{ $p['usage'] }}</p>
                            </div>
                        @endif
                        <form method="dialog" class="mt-8">
                            <button class="bg-[#4b2940] text-white px-5 py-2 rounded-full font-semibold hover:bg-[#6a405a] transition">
                                Tutup
                            </button>
                        </form>
                    </div>
                </div>
            </dialog>
        @endforeach
    </div>

</section>

<script>
    document.querySelectorAll('[data-product-dialog]').forEach((button) => {
        button.addEventListener('click', () => {
            document.getElementById(button.dataset.productDialog).showModal();
        });
    });
</script>
@endsection
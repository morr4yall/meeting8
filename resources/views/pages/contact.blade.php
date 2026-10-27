@extends('layouts.app')

@section('content')
<section class="max-w-3xl mx-auto px-5 sm:px-8 py-12 md:py-16">
    <div class="text-center mb-8">
        <span class="text-xs uppercase tracking-[0.2em] font-bold text-[#a5686c]">Kami siap mendengarkan</span>
        <h1 class="text-3xl md:text-5xl font-bold text-[#3d3038] mt-3">Hubungi Kami</h1>
        <p class="text-[#746a70] mt-4">Ada pertanyaan atau masukan? Kirimkan pesan untuk tim STARINC.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 p-4 rounded-2xl mb-6 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-6 sm:p-9 rounded-[1.5rem] shadow-[0_12px_40px_rgba(65,42,52,.07)] border border-[#eee2dc] space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-semibold text-[#51484e] mb-2">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="w-full border border-[#e6dcd6] bg-[#fdfbf9] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#b87982]/30 focus:border-[#a5686c]">
            @error('name') <p class="text-sm text-red-700 mt-1">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-semibold text-[#51484e] mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-[#e6dcd6] bg-[#fdfbf9] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#b87982]/30 focus:border-[#a5686c]">
            @error('email') <p class="text-sm text-red-700 mt-1">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-semibold text-[#51484e] mb-2">Pesan</label>
            <textarea name="message" rows="5" required class="w-full border border-[#e6dcd6] bg-[#fdfbf9] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#b87982]/30 focus:border-[#a5686c]">{{ old('message') }}</textarea>
            @error('message') <p class="text-sm text-red-700 mt-1">{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="w-full bg-[#4b2940] text-white font-semibold py-3.5 rounded-xl hover:bg-[#6a405a] transition shadow-md">Kirim Pesan</button>
    </form>
</section>
@endsection
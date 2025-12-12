<x-layout>
    {{-- tes nambah komen --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
        <div class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
            <div class="w-full h-40 rounded-xl overflow-hidden">
                <img src="{{ asset('images/Makanan.jpg') }}" alt="Makanan" class="w-full h-full object-cover">
            </div>
            <p class="py-3 text-sm text-gray-700 leading-relaxed">
                Makanan kucing untuk anabul yang super imut, dengan harga sangaaat terjangkau!
            </p>
            <button class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                Gas Beli!
            </button>
        </div>
        <div class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
            <div class="w-full h-40 rounded-xl overflow-hidden">
                <img src="{{ asset('images/alatmandi.jpeg') }}" alt="Mandi" class="w-full h-full object-cover">
            </div>
            <p class="py-3 text-sm text-gray-700 leading-relaxed">
                Alat mandi yang bikin bulu anabul glowing kembali!
            </p>
            <button class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                Gas Beli!
            </button>
        </div>
        <div class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
            <div class="w-full h-40 rounded-xl overflow-hidden">
                <img src="{{ asset('images/perawatan.jpeg') }}" alt="rawat" class="w-full h-full object-cover">
            </div>
            <p class="py-3 text-sm text-gray-700 leading-relaxed">
                Produk perawatan edisi super lucu dan bermanfaat!
            </p>
            <button class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                Gas Beli!
            </button>
        </div>
        <div class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
            <div class="w-full h-40 rounded-xl overflow-hidden">
                <img src="{{ asset('images/mainan1.jpeg') }}" alt="main" class="w-full h-full object-cover">
            </div>
            <p class="py-3 text-sm text-gray-700 leading-relaxed">
                Produk special edition buat anabul manja!
            </p>
            <button class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                Gas Beli!
            </button>
        </div>
        <div class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
            <div class="w-full h-40 rounded-xl overflow-hidden">
                <img src="{{ asset('images/vitamin.jpeg') }}" alt="vitamin" class="w-full h-full object-cover">
            </div>
            <p class="py-3 text-sm text-gray-700 leading-relaxed">
                Vitamin lezat untuk menjaga imun anabul.
            </p>
            <button class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                Gas Beli!
            </button>
        </div>
        <div class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
            <div class="w-full h-40 rounded-xl overflow-hidden">
                <img src="{{ asset('images/mainan2.jpeg') }}" alt="main2" class="w-full h-full object-cover">
            </div>
            <p class="py-3 text-sm text-gray-700 leading-relaxed">
                Mainan super lucu yang bikin anabul aktif dan happy!
            </p>
            <button class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                Gas Beli!
            </button>
        </div>
    </div>
</x-layout>

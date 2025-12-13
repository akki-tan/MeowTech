<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
        @forelse ($products as $product)
            <div
                class="bg-white rounded-2xl border border-untukhoverar p-4 shadow-md hover:shadow-lg hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="w-full h-full object-cover">
                </div>
                <p class="py-3 text-sm text-gray-700 leading-relaxed">
                    {{ $product->description }}
                </p>
                <button
                    class="w-full mt-2 rounded-xl px-3 py-2 font-medium text-untukbg border border-untukhoverar hover:bg-untukhoverar transition-all">
                    Gas Beli!
                </button>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">
                Belum ada produk T_T
            </p>
        @endforelse
    </div>

</x-layout>

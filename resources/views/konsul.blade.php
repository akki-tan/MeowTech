<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-2xl font-bold mb-2">Konsultasi ke Ahli Hewan</h1>
    <p class="text-gray-700 mb-6">
        Berikut adalah dokter hewan yang bisa kamu hubungi untuk konsultasi lebih lanjut.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-2xl border shadow-md hover:shadow-lg transition-all duration-300">
            <div class="w-full aspect-[4/5] bg-gray-100 rounded-xl overflow-hidden mb-3">
                <img src="{{ asset('images/dokter2.jpeg') }}" alt="dokter2" class="w-full h-full object-cover object-top">
            </div>
            <h2 class="font-semibold text-lg">drh. Adi Suryadi</h2>
            <p class="text-sm text-gray-600">Spesialis kucing & hewan kecil</p>
            <p class="mt-3 text-gray-700 text-sm">
                WA: <span class="font-medium">0812-3456-7890</span>
            </p>
        </div>
        <div class="bg-white p-5 rounded-2xl border shadow-md hover:shadow-lg transition-all duration-300">
            <div class="w-full aspect-[4/5] bg-gray-100 rounded-xl overflow-hidden mb-3">
                <img src="{{ asset('images/dokter1.jpeg') }}" alt="dokter1"
                    class="w-full h-full object-cover object-top">
            </div>
            <h2 class="font-semibold text-lg">drh. Aditama Rizky</h2>
            <p class="text-sm text-gray-600">Spesialis anjing & vaksinasi</p>
            <p class="mt-3 text-gray-700 text-sm">
                WA: <span class="font-medium">0857-1234-5678</span>
            </p>
        </div>
        <div class="bg-white p-5 rounded-2xl border shadow-md hover:shadow-lg transition-all duration-300">
            <div class="w-full aspect-[4/5] bg-gray-100 rounded-xl overflow-hidden mb-3">
                <img src="{{ asset('images/dokter3.jpeg') }}" alt="dokter3"
                    class="w-full h-full object-cover object-top">
            </div>
            <h2 class="font-semibold text-lg">drh. Melvin Arga</h2>
            <p class="text-sm text-gray-600">Spesialis hewan eksotis</p>
            <p class="mt-3 text-gray-700 text-sm">
                WA: <span class="font-medium">0896-7766-8890</span>
            </p>
        </div>
    </div>
</x-layout>

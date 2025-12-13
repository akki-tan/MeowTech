<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="max-w-6xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-untukbg mb-6 text-center">
            Berikut adalah Shelter Terdekat di Kota Anda
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-white border border-untukhoverar rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/shelter1.jpeg') }}" alt="Shelter 1" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-untukbg mt-4">Meow House</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Shelter khusus kucing dengan program adopsi dan penitipan harian.
                </p>
                <button
                    class="mt-4 w-full rounded-xl px-4 py-2 border border-untukhoverar text-untukbg font-medium hover:bg-untukhoverar transition-all">
                    Lihat Detail
                </button>
            </div>
            <div
                class="bg-white border border-untukhoverar rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/shelter2.jpeg') }}" alt="Shelter 2" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-untukbg mt-4">Paw Rescue</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Menyelamatkan hewan terlantar dan menyediakan layanan adopsi aman.
                </p>
                <button
                    class="mt-4 w-full rounded-xl px-4 py-2 border border-untukhoverar text-untukbg font-medium hover:bg-untukhoverar transition-all">
                    Lihat Detail
                </button>
            </div>
            <div
                class="bg-white border border-untukhoverar rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/shelter3.jpeg') }}" alt="Shelter 3" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-untukbg mt-4">Cat Haven</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Tempat perlindungan kucing dengan tenaga profesional dan ruang bermain.
                </p>
                <button
                    class="mt-4 w-full rounded-xl px-4 py-2 border border-untukhoverar text-untukbg font-medium hover:bg-untukhoverar transition-all">
                    Lihat Detail
                </button>
            </div>
            <div
                class="bg-white border border-untukhoverar rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/shelter4.jpeg') }}" alt="Shelter 4" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-untukbg mt-4">Purr Care Center</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Menyediakan adopsi, grooming, dan konsultasi kesehatan kucing.
                </p>
                <button
                    class="mt-4 w-full rounded-xl px-4 py-2 border border-untukhoverar text-untukbg font-medium hover:bg-untukhoverar transition-all">
                    Lihat Detail
                </button>
            </div>
            <div
                class="bg-white border border-untukhoverar rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/shelter5.jpeg') }}" alt="Shelter 5" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-untukbg mt-4">Kitty Guardian</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Fokus pada penyelamatan dan perawatan kucing korban penelantaran.
                </p>
                <button
                    class="mt-4 w-full rounded-xl px-4 py-2 border border-untukhoverar text-untukbg font-medium hover:bg-untukhoverar transition-all">
                    Lihat Detail
                </button>
            </div>
            <div
                class="bg-white border border-untukhoverar rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all">
                <div class="w-full h-40 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/shelter6.jpeg') }}" alt="Shelter 6" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-untukbg mt-4">Happy Tails Home</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Shelter ramah hewan dengan fasilitas bermain dan layanan adopsi lengkap.
                </p>
                <button
                    class="mt-4 w-full rounded-xl px-4 py-2 border border-untukhoverar text-untukbg font-medium hover:bg-untukhoverar transition-all">
                    Lihat Detail
                </button>
            </div>

        </div>
    </section>
</x-layout>

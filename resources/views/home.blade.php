<x-layout>
    <x-slot:title>{{ $title ?? 'Home' }}</x-slot:title>
    <section class="max-w-6xl mx-auto px-4 py-10">
        <div
            class="bg-white rounded-2xl border border-untukhoverar p-6 shadow-md hover:shadow-lg transition-all duration-300">
            <div class="w-full rounded-xl overflow-hidden">
                <img src="{{ asset('images/Kucing1.jpg') }}" alt="Kucing imut"
                    class="w-full h-64 object-cover sm:h-72 md:h-80">
            </div>
            <div class="mt-5">
                <h1 class="text-2xl sm:text-3xl font-semibold text-untukbg">
                    Si Meong, Si Imut Yang Bikin Hati Meleleh
                </h1>
                <p class="mt-2 text-sm text-gray-700 leading-relaxed">
                    Kucing adalah makhluk berkaki empat yang sangat ssangat imut yang memiliki bulu lebat yang memakan
                    segalanya saat di alam liar! Jika kamu memiliki seekor anabul kesayanganmu, maka rawatlah dia dengan
                    baik karna ucing jugalah makhluk tuhan! Jangan kasari dia, rawat dia dengan kasih sayang, jagalah
                    kesehatannya, jangan kasar kepadanya, karna kucing jugalah makhluk yang memiliki perasaan. Makhluk
                    imut satu ini lahir hanya untuk menjalani kehidupannya yang pendek, maka sayangilah dia! karena
                    Sebagian kecil hidupmu adalah seluruh hidup mereka!
                    Karena itulah Meowtech hadir untuk membantumu merawat anabulmu^^
                </p>
            </div>
            <div class="mt-32"></div>
            <h2 class="text-2xl sm:text-3xl font-semibold text-untukbg text-center">
                Yuk Cobain Fiturnya
            </h2>
            <div id="fitur" class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                <x-navlink href="/konsul" :active="request()->is('konsul')"
                    class="flex items-center justify-center rounded-xl border border-untukhoverar px-4 py-2 hover:bg-untukhoverar transition">
                    <span class="text-sm font-medium text-untukteks">Konsultasi</span>
                </x-navlink>
                <x-navlink href="/artikel" :active="request()->is('artikel')"
                    class="flex items-center justify-center rounded-xl border border-untukhoverar px-4 py-2 hover:bg-untukhoverar transition">
                    <span class="text-sm font-medium text-untukteks">Artikel</span>
                </x-navlink>
                <x-navlink href="/toko" :active="request()->is('toko')"
                    class="flex items-center justify-center rounded-xl border border-untukhoverar px-4 py-2 hover:bg-untukhoverar transition">
                    <span class="text-sm font-medium text-untukteks">Toko</span>
                </x-navlink>
                <x-navlink href="/shelter" :active="request()->is('shelter')"
                    class="flex items-center justify-center rounded-xl border border-untukhoverar px-4 py-2 hover:bg-untukhoverar transition">
                    <span class="text-sm font-medium text-untukteks">Adopsi</span>
                </x-navlink>
            </div>
        </div>
        </div>
    </section>
</x-layout>

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6 py-10">
        <article class="md:col-span-2 bg-white p-8 shadow rounded-2xl border">
            <h3 class="text-gray-500 mb-2">{{ $article['author'] }}</h3>
            <p class="text-gray-800 leading-relaxed mb-6">
                {{ $article['body'] }}
            </p>
            <a href="/artikel"
                class="inline-block rounded-lg px-4 py-2 font-medium text-untukbg border hover:bg-untukbg hover:text-white">
                &laquo; Kembali ke artikel
            </a>
        </article>
        <div class="hidden md:block">
            <div class="bg-white shadow p-6 rounded-xl border">
                <p class="font-semibold mb-3">Artikel Lain</p>
                <ul class="text-sm text-gray-700 space-y-2">
                    @foreach ($others as $other)
                        <li>
                            <a href="/articles/{{ $other->slug }}" class="hover:underline">
                                {{ $other->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>

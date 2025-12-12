<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Artikel Terbaru</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <div
                    class="bg-white border border-untukhoverar rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-5">
                    <h2 class="text-xl font-bold mb-1">
                        <a href="/articles/{{ $article['slug'] }}" class="hover:underline">
                            {{ $article['title'] }}
                        </a>
                    </h2>
                    <p class="text-sm text-gray-500 mb-3">{{ $article['author'] }}</p>
                    <p class="text-gray-700 text-sm mb-4">
                        {{ Str::limit($article['body'], 100) }}
                    </p>
                    <a href="/articles/{{ $article['slug'] }}"
                        class="inline-block text-untukbg font-medium hover:underline">
                        Baca Selengkapnya →
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto p-6">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-3xl font-bold mb-6">Kelola Artikel</h1>
        <div class="bg-white p-6 rounded-2xl shadow mb-10 border">
            <h2 class="text-xl font-bold mb-4">Tambah Artikel Baru</h2>
            <form action="/admin/artikel" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="title" placeholder="Judul Artikel" class="w-full border p-3 rounded-lg" required>
                <input type="text" name="slug" placeholder="Slug (contoh: cara-merawat-kucing)" class="w-full border p-3 rounded-lg" required>
                <input type="text" name="author" placeholder="Author|Tanggal" class="w-full border p-3 rounded-lg" required>
                <textarea name="body" rows="5" placeholder="Isi artikel..." class="w-full border p-3 rounded-lg" required></textarea>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Simpan Artikel
                </button>
            </form>
        </div>
        <h2 class="text-2xl font-bold mb-4">Daftar Artikel</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <div class="bg-white border rounded-2xl shadow-md p-5">
                    <h2 class="text-xl font-bold mb-1">
                        <a href="/articles/{{ $article->slug }}" class="hover:underline">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="text-sm text-gray-500 mb-3">{{ $article->author }}</p>
                    <p class="text-gray-700 text-sm mb-4">
                        {{ Str::limit($article->body, 100) }}
                    </p>
                    <div class="flex gap-3 mt-2">
                        <a href="/admin/artikel/edit/{{ $article->id }}" class="text-blue-600 font-semibold hover:underline">
                            Edit
                        </a>

                        <form action="/admin/artikel/delete/{{ $article->id }}" method="POST"
                            onsubmit="return confirm('Yakin mau hapus artikel ini?')">
                            @csrf
                            <button type="submit" class="text-red-600 font-semibold hover:underline">Hapus</button>
                        </form>
                    </div>
                </div> 
            @endforeach
        </div>

    </div>
</body>
</html>

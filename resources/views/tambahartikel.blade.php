<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Artikel</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;700&display=swap" rel="stylesheet">
</head>
</head>

<body class="bg-white font-fredoka">
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-untukbg">
                Kelola Artikel
            </h1>
            <a href="/admin" class="px-4 py-2 bg-untukhoverar text-untuktext rounded-lg hover:underline">
                Kembali ke Dashboard
            </a>
        </div>
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white p-6 rounded-2xl shadow-md border border-untukhoverar mb-10">
            <h2 class="text-xl font-bold text-untukbg mb-4">
                Tambah Artikel Baru
            </h2>
            <form action="/admin/artikel" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="title" placeholder="Judul Artikel"
                    class="w-full border-2 border-untukhoverar p-3 rounded-lg focus:outline-none focus:border-untukbg"
                    required>
                <input type="text" name="slug" placeholder="Slug (contoh: cara-merawat-kucing)"
                    class="w-full border-2 border-untukhoverar p-3 rounded-lg focus:outline-none focus:border-untukbg"
                    required>
                <input type="text" name="author" placeholder="Author | Tanggal"
                    class="w-full border-2 border-untukhoverar p-3 rounded-lg focus:outline-none focus:border-untukbg"
                    required>
                <textarea name="body" rows="5" placeholder="Isi artikel..."
                    class="w-full border-2 border-untukhoverar p-3 rounded-lg focus:outline-none focus:border-untukbg" required></textarea>

                <button type="submit"
                    class="px-5 py-2 bg-untukbg text-untuktext rounded-lg hover:bg-untukhoverar transition">
                    Simpan Artikel
                </button>
            </form>
        </div>
        <h2 class="text-2xl font-bold text-untukbg mb-4">
            Artikel yang Sudah Diposting
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <div class="bg-white rounded-2xl border border-untukhoverar shadow-md p-5">
                    <h3 class="text-lg font-bold text-untukbg mb-1">
                        {{ $article->title }}
                    </h3>

                    <p class="text-sm text-gray-500 mb-2">
                        {{ $article->author }}
                    </p>

                    <p class="text-sm text-gray-700 mb-4">
                        {{ Str::limit($article->body, 100) }}
                    </p>

                    <div class="flex gap-4">
                        <a href="/admin/artikel/edit/{{ $article->id }}"
                            class="text-blue-600 font-medium hover:underline">
                            Edit
                        </a>
                        <form action="/admin/artikel/delete/{{ $article->id }}" method="POST"
                            onsubmit="return confirm('Yakin mau hapus artikel ini?')">
                            @csrf
                            <button type="submit" class="text-red-600 font-medium hover:underline">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

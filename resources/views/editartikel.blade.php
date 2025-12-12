<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Edit Artikel</h1>
    <div class="bg-white p-6 rounded-2xl shadow border">
        <form action="/admin/artikel/update/{{ $article->id }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="font-semibold">Judul Artikel</label>
                <input type="text" name="title" value="{{ $article->title }}" class="w-full border p-3 rounded-lg" required>
            </div>
            <div>
                <label class="font-semibold">Slug</label>
                <input type="text" name="slug" value="{{ $article->slug }}" class="w-full border p-3 rounded-lg" required>
            </div>
            <div>
                <label class="font-semibold">Author</label>
                <input type="text" name="author" value="{{ $article->author }}" class="w-full border p-3 rounded-lg" required>
            </div>
            <div>
                <label class="font-semibold">Isi Artikel</label>
                <textarea name="body" rows="6" class="w-full border p-3 rounded-lg" required>{{ $article->body }}</textarea>
            </div>
            <div class="flex justify-between">
                <a href="/admin/artikel" class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-gray-400">
                    Kembali
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>

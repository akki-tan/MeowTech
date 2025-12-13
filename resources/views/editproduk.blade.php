<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white font-fredoka">
    <div class="max-w-xl mx-auto p-6">
        <h1 class="text-2xl font-bold text-untukbg mb-6">Edit Produk</h1>
        <form action="/admin/produk/update/{{ $product->id }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            <input type="text" name="name" value="{{ $product->name }}"
                class="w-full border-2 border-untukhoverar p-3 rounded-lg">
            <input type="number" name="price" value="{{ $product->price }}"
                class="w-full border-2 border-untukhoverar p-3 rounded-lg">
            <textarea name="description" rows="4" class="w-full border-2 border-untukhoverar p-3 rounded-lg">{{ $product->description }}</textarea>
            <input type="file" name="image" class="w-full border-2 border-untukhoverar p-2 rounded-lg bg-white">
            <button type="submit" class="w-full bg-untukbg text-untuktext py-2 rounded-lg hover:bg-untukhoverar">
                Simpan Perubahan
            </button>
        </form>
    </div>
</body>

</html>

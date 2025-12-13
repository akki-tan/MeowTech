<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk</title>

    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-white font-fredoka">
    <div class="max-w-6xl mx-auto p-6">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-untukbg">Kelola Produk</h1>

            <a href="/admin" class="px-4 py-2 bg-untukhoverar text-untuktext rounded-lg hover:underline">
                Kembali ke Dashboard
            </a>
        </div>
        <div class="bg-untuktext p-6 rounded-2xl shadow-md border mb-10">
            <h2 class="text-xl font-bold text-untukbg mb-4">Tambah Produk Baru</h2>
            <form action="/admin/produk" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-untukbg font-medium mb-1">Nama Produk</label>
                    <input type="text" name="name"
                        class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                        placeholder="Masukkan nama produk" required>
                </div>
                <div>
                    <label class="block text-untukbg font-medium mb-1">Harga</label>
                    <input type="number" name="price"
                        class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                        placeholder="Contoh: 25000" required>
                </div>
                <div>
                    <label class="block text-untukbg font-medium mb-1">Deskripsi</label>
                    <textarea name="description" rows="4"
                        class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                        placeholder="Deskripsi produk..." required></textarea>
                </div>
                <div>
                    <label class="block text-untukbg font-medium mb-1">Foto Produk</label>
                    <input type="file" name="image"
                        class="w-full px-3 py-2 border-2 border-untukhoverar rounded-lg bg-white" accept="image/*">
                </div>

                <button type="submit"
                    class="w-full bg-untukbg hover:bg-untukhoverar text-untuktext font-semibold py-2 rounded-lg transition-all">
                    Simpan Produk
                </button>
            </form>
        </div>
        @isset($products)
            <h2 class="text-2xl font-bold text-untukbg mb-4">Daftar Produk</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <div class="bg-untuktext p-5 rounded-2xl shadow border">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                class="w-full h-40 object-cover rounded-xl mb-3">
                        @endif
                        <h3 class="text-lg font-bold text-untukbg">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-600 mb-1">
                            Rp {{ number_format($product->price) }}
                        </p>
                        <p class="text-sm text-gray-700 mb-4">
                            {{ $product->description }}
                        </p>
                        <div class="flex justify-between items-center mt-4">
                            <a href="/admin/produk/edit/{{ $product->id }}"
                                class="text-blue-600 font-medium hover:underline">
                                Edit
                            </a>
                            <form action="/admin/produk/delete/{{ $product->id }}" method="POST"
                                onsubmit="return confirm('Yakin mau hapus produk ini?')">
                                @csrf
                                <button type="submit" class="text-red-600 font-medium hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset
    </div>
</body>

</html>

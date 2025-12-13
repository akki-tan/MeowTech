<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;700&display=swap" rel="stylesheet">
</head>
</head>

<body class="bg-white font-fredoka">
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-untukbg">
                Dashboard Admin
            </h1>
            <form action="/login" method="GET">
                @csrf
                <button type="submit" class="px-4 py-2 bg-untukhoverar text-untuktext rounded-lg hover:underline">
                    Logout
                </button>
            </form>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <a href="/admin/artikel"
                class="bg-white rounded-2xl border border-untukhoverar p-6 shadow-md
                      hover:shadow-lg hover:scale-[1.03] transition-all">
                <h2 class="text-xl font-bold text-untukbg mb-2">
                    Kelola Artikel
                </h2>
                <p class="text-gray-600 text-sm">
                    Tambah, edit, dan hapus artikel edukasi untuk pengguna.
                </p>
            </a>
            <a href="/admin/produk"
                class="bg-white rounded-2xl border border-untukhoverar p-6 shadow-md
                      hover:shadow-lg hover:scale-[1.03] transition-all">
                <h2 class="text-xl font-bold text-untukbg mb-2">
                    Kelola Produk
                </h2>
                <p class="text-gray-600 text-sm">
                    Atur produk toko lengkap dengan gambar dan deskripsi.
                </p>
            </a>
        </div>
    </div>
</body>

</html>

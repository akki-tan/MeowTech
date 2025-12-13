<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Akun</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-pink-100">
        <form action="/simpan" method="POST"
            class="bg-untuktext p-8 rounded-2xl shadow-md w-full max-w-md font-fredoka">
            @csrf
            <h2 class="text-2xl font-bold text-center text-untukbg mb-6">Buat Akun</h2>

            <div class="mb-4">
                <label for="name" class="block text-untukbg font-medium mb-2">Nama</label>
                <input type="name"
                    name="name"class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                    placeholder="Masukkan Nama" />
            </div>
            <div class="mb-4">
                <label for="email" class="block text-untukbg font-medium mb-2">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                    placeholder="Masukkan email" />
            </div>
            <div class="mb-6">
                <label for="password" class="block text-untukbg font-medium mb-2">Password</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                    placeholder="Masukkan password" />
            </div>
            <div class="mb-6">
                <label for="kota" class="block text-untukbg font-medium mb-2">Asal Kota</label>
                <input type="kota" name="kota"
                    class="w-full px-4 py-2 border-2 border-untukhoverar rounded-lg focus:outline-none focus:border-untukbg"
                    placeholder="Masukkan Asal Kota" />
            </div>
            <button type="submit"
                class="w-full bg-untukbg hover:bg-untukhoverar text-untuktext font-semibold py-2 rounded-lg transition-all">
                Buat Akun
            </button>
        </form>
    </div>
</body>

</html>

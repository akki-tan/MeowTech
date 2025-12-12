 <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body> 
<x-navbar></x-navbar>

  <x-header>{{ $title }}</x-header>

  <main class="min-h-screen">
   <div class="max-auto w-screen py-6 sm:px-6 lg:px-8">
    {{ $slot }}
    </div> 
  </main>

<footer class="font-fredoka bg-untukbg text-untuktext py-3">
  <div class="mx-auto max-xl flex justify-center items-center">
    <a href="/about" class="-mx-3 block rounded-lg px-3 py-2 font-semibold {{ request()->is('about') ? 'bg-untuktext text-untukbg' : 'text-untuktext hover:text-untuktext hover:bg-untukbg' }}" >About</a>
  </div>
</footer>
</body>
</html>
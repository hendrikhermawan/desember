<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <html class="h-full bg-gray-900">
  <body class="h-full">
    <title>Dashboard</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</head>

<body>

<div class="min-h-full">

  <!-- navbar -->
  <x-navbar></x-navbar>

  <!-- header -->
  <!-- ambil variabel title dari routes lewat halaman home -->
<x-header>{{$title}}</x-header>
  
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- panggil setiap konten tiap halaman dengan menggunakan variabel $slot -->
    {{$slot}} 
    </div>
  </main>
</div>

</body>
</html>
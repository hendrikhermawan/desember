<x-layout>
    <!-- ambil data dari routes tiap halaman dengan variabel title untuk mengirim ke layout-->
    <x-slot:title>{{$title}}</x-slot:title>
  <!-- <h3 class="text-white">Ini adalah halaman project</h3> -->


<!-- buat artikel looping dari routes -->

@foreach ($posts as $post)

<article class="py-8 max-w-screen-md border-b border-gray-300 text-amber-50 ">
    <h2 class="mb-1 text-3xl tracking-tight font-bold">{{$post['title']}}</h2>
    <div class="text-base text-gray-400">
      <a href="#">{{$post['author']}}</a> | 1 januari 2025
    </div>
    <p class="my-4-font-light">
      {{$post['body']}}
    </p>
    <a href="" class="font-medium text-blue-400 hover:underline">Read More &raquo;</a>
  </article>
  
@endforeach

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

  <!-- Card Project -->
  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
    
    <!-- Gambar -->
    <img src="https://images.unsplash.com/photo-1648824572347-517357c9c44e?q=80&w=912&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Project Inventaris" class="w-full h-48 object-cover">

    <!-- Isi -->
    <div class="p-5 space-y-3">
      
      <!-- Judul -->
      <h3 class="text-xl font-semibold text-gray-800">
        Sistem Inventaris IT
      </h3>

      <!-- Deskripsi -->
      <p class="text-sm text-gray-600">
        Website inventaris aset IT dengan fitur scan QR Code dan chatbot NLP.
      </p>

      <!-- Teknologi -->
      <div class="flex flex-wrap gap-2 text-xs">
        <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded">Laravel</span>
        <span class="bg-green-100 text-green-600 px-2 py-1 rounded">MySQL</span>
        <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded">NLP</span>
      </div>

      <!-- Tombol -->
      <div class="flex gap-3 pt-3">
        <a href="#" class="px-4 py-2 text-sm rounded-lg bg-gray-900 text-white hover:bg-gray-800">
          Detail
        </a>
        <a href="#" class="px-4 py-2 text-sm rounded-lg border border-gray-300 hover:bg-gray-100">
          GitHub
        </a>
      </div>

    </div>
  </div>

</div>


</x-layout>
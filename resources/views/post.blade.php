<x-layout>
  <!-- ambil data dari routes tiap halaman dengan variabel title untuk mengirim ke layout-->
  <x-slot:title>{{$title}}</x-slot:title>
  <!-- <h3 class="text-white">Ini adalah halaman project</h3> -->


  <!-- buat artikel looping dari routes -->


  <article class="py-8 max-w-screen-md border-b text-amber-50 ">

      <h2 class="mb-1 text-3xl tracking-tight font-bold">{{$post['title']}}</h2>
  

    <div class="text-base text-gray-400">
      <a href="#">{{$post['author']}}</a> | 1 januari 2025
    </div>
    <p class="my-4-font-light">
      {{$post['body']}};
    </p>
    <a href="/projects" class="font-medium text-blue-400 hover:underline">&laquo; Kembali Ke Halaman Project</a>
  </article>



  

</x-layout>
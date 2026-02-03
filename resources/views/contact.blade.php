<x-layout>
    <!-- ambil data dari routes tiap halaman dengan variabel title untuk mengirim ke layout-->
    <x-slot:title>{{$title}}</x-slot:title>
  <h3 class="text-white">Ini adalah halaman contact</h3>
  <p class="text-white">Hubungi saya di nomor {{$nomor}}</p>
</x-layout>
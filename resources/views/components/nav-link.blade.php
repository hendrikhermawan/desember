<!-- pindah bagian href ke dalam file navbar -->
@props(['active' => false])
<!-- gunakan variabel attributes untuk menerima atribute apapun dari link nav-link -->
<a {{$attributes}} class="{{ $active 
        ? 'bg-gray-950/50 px-3 py-2 text-sm font-medium text-white' 
        : 'text-gray-300 hover:bg-white/5 hover:text-white px-3 py-2 text-sm font-medium' 
   }} rounded-md" aria-current="{{ $active ? 'page' : false }}">
    {{$slot}} 
</a>



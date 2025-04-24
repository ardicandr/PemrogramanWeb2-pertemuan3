<x-layout> 
   @if ($category)
       <h1>{{ $category->name }}</h1> 
       <hr> 
       <p>{{ $category->description }}</p>
   @else
       <h1>Kategori tidak ditemukan</h1>
       <p>Silakan kembali ke halaman sebelumnya.</p>
   @endif
</x-layout> 

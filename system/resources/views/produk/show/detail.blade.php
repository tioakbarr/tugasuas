<p>
   {{($produk->harga)}} |
   Stok : {{$produk->stok}} |
   Berat : {{$produk->berat}} gr |
   Seller : {{$produk->seller->nama}}
   Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>
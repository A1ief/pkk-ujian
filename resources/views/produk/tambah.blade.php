@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col">
            <h1 class="text-center">Input Produk</h1>
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                  <label for="namaProduk" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="namaProduk" required>
               </div>
               <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" class="form-control" name="foto" required>
               </div>
               <div class="mb-3">
                  <label for="harga" class="form-label">harga</label>
                  <input type="number" class="form-control" name="harga" required>
               </div>
               <div class="mb-3">
                  <label for="descProduk" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" name="descProduk" required>
               </div>
               <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori_id">
                   <option selected>Open this select menu</option>
                   @foreach ($kategori as $item)
                      <option value="{{ $item->id }}">{{ $item->namaKategori }}</option>
                   @endforeach
                </select>
             </div>
               <a href="{{ route('produk.index') }}" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
               <button type="submit" class="btn btn-success btn-sm" style="float: right">Submit</button>
            </form>
         </div>
      </div>
   </div>
@endsection

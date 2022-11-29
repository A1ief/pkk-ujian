@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-10">
            <h1 class="text-center">Data Kategori</h1>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary m-2" style="float: right">tambah Data</a>
            <table class="table table-bordered text-center">
               <thead>
                  <tr>
                     <th scope="col">No</th>
                     <th scope="col">Nama Kategori</th>
                     <th scope="col">Deskripsi</th>
                     <th scope="col">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($data as $item)
                     <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->namaKategori }}</td>
                        <td>{{ $item->descKategori }}</td>
                        <td>
                           <a href="{{ route('kategori.edit', $item->id) }}"class="btn btn-outline-success btn-sm">Update</a>
                           <a href="{{ url('hapKat/' . $item->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection

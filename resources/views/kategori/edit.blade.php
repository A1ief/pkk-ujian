@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Input Kategori</h1>
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="namaKategori" value="{{ $kategori->namaKategori }}" required>
                      </div>
                    <div class="mb-3">
                        <label for="descKategori" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="descKategori" value="{{ $kategori->descKategori }}" required>
                      </div>
                      <a href="{{ route('kategori.index') }}" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
                      <button type="submit" class="btn btn-success btn-sm" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
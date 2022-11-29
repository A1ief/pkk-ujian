@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Input Post</h1>
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                      </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" name="isi" required></textarea>
                      </div>
                      <a href="{{ route('post.index') }}" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
                      <button type="submit" class="btn btn-success btn-sm" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
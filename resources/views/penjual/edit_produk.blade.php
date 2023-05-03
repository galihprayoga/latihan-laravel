@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Produk {{ $id }}</div>


                <div class="card-body">
                    <div class="row mb-2">
                        @if (\Session::has('message'))
                            <div class="alert alert-success">
                                {!! \Session::get('message') !!}
                            </div>
                        @elseif(\Session::has('error'))
                            <div class="alert alert-danger">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                    </div>
                    <form method="POST" action="{{ url('/simpan_edit_produk/'.$id) }}" enctype="multipart/form-data">
                        @csrf
                        @foreach($data_produk as $row)
                        <div class="row mb-3">
                            <label for="nama_produk" class="col-md-4 col-form-label text-md-end">Nama Produk</label>


                            <div class="col-md-6">
                                <input id="nama_produk" type="text" class="form-control" name="nama_produk"
                                    value="{{ $row->nama_produk }}" required autocomplete="nama_produk" autofocus>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="gambar_produk" class="col-md-4 col-form-label text-md-end">Gambar Produk</label>


                            <div class="col-md-6">
                                <img class="img-fluid rounded shadow-sm mb-2"
                                    src="{{ asset('gambar/gambar_produk/'.$row->gambar_produk) }}"
                                    style="width: 90px; height:110px" alt="Gambar Produk">
                                <input id="gambar_produk" type="file" class="form-control" name="gambar_produk">


                                <input id="gambar_produk_lama" type="text" class="form-control" name="gambar_produk_lama" value="{{ $row->gambar_produk }}" hidden>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="stok" class="col-md-4 col-form-label text-md-end">Stok</label>


                            <div class="col-md-6">
                                <input id="stok" type="number" class="form-control" name="stok" value="{{ $row->stok }}"
                                    required autocomplete="stok" autofocus>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="deskripsi_produk" class="col-md-4 col-form-label text-md-end">Deskripsi
                                Produk</label>


                            <div class="col-md-6">
                                <textarea id="deskripsi_produk" class="form-control" name="deskripsi_produk"
                                    value="{{ $row->deskripsi_produk }}">{{ $row->deskripsi_produk }}</textarea>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')


@section('content')
    <ul class="nav nav-pills bg-secondary justify-content-center mb-4">
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ url('input_produk') }}">Input</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('report_produk') }}">Report</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Profil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('logout') }}">Logout</a>
        </li>
    </ul>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Report Produk</div>


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
                    <div class="responsive">
                        <table class="table table-stripped table-bordered">
                            <thead>
                                <tr class="bg-primary text-white" align="center">
                                    <th>No</th>
                                    <th>Gambar Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($data_produk as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td align="center">
                                        <img class="img-fluid rounded shadow-sm"
                                            src="{{ asset('gambar/gambar_produk/'.$row->gambar_produk) }}"
                                            style="width: 90px; height:90px" alt="Gambar Produk">
                                    </td>
                                    <td>{{ $row->nama_produk }}</td>
                                    <td>{{ $row->stok }}</td>
                                    <td>{{ $row->deskripsi_produk }}</td>
                                    <td align="center">
                                        <a href="{{ url('/edit_produk/'.$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ url('/hapus_produk/'.$row->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

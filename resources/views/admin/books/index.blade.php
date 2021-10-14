@extends('layouts.admin')
@section('judul')
Halaman Daftar Buku

@endsection
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books</div>

                <div class="card-body">
                @foreach ($buku as $data)
                Nama Buku : {{$data->nama_buku}} <br>
                @if ($data->jumlah_halaman > 1)
                Jumlah Halaman : {{$data->jumlah_halaman}} <br>
                @else
                Jumlah Halaman : <b>Belum Mempunyai Halaman</b><br>
                @endif
                Translate Judul Buku : {!! $data->translate_judul_buku ?? '<b>Translate Buku Belum Tersedia</b>' !!} <hr>

                @endforeach


                        Books
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

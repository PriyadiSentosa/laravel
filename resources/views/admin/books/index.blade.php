@extends('layouts.admin')

@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buku</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($buku as $data)
                        Nama Pengarang Buku : {{ $data->pengarang->nama_pengarang }} <br>
                        Email Pengarang Buku : {{ $data->pengarang->email }} <br>
                        Nama Buku : {{ $data->nama_buku }} <br>
                        @if ($data->jumlah_halaman > 1)
                        Jumlah Halaman : {{ $data->jumlah_halaman }} <br>
                        @else
                        Jumlah Halaman : Belum Mempunyai Jumlah Halaman<br>
                        @endif
                        Translate Judul Buku : {{ $data->translate_judul_buku ?? 'Belum ada Translate' }} <hr>
                    @endforeach

                </div>
                <div class="card-footer">
                  Footer
                </div>
            </div>

            <div class="card">
                <div class="card-header">Daftar Pengarang</div>
                <div class="card-body">
                    @foreach ($pengarang as $data )
                    Nama Pengarang Buku : {{ $data->nama_pengarang }} <br>
                    Email Pengarang Buku : {{ $data->email }} <br>
                    Telepon Pengarang : {{ $data->telp }} <br>
                    Daftar Buku :
                    <ul>
                    @foreach ($data->book as $item)
                   <li> {{ $item->nama_buku }}</li>
                    @endforeach</ul>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

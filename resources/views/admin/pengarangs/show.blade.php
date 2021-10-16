@extends('layouts.admin')
@section('judul')
Halaman Show

@endsection
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Show</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Pengarang</label>
                        <p>{{$pengarang->nama_pengarang}}</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p>{{$pengarang->email}}</p>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <p>{{$pengarang->telepon}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

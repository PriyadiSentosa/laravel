@extends('layouts.admin')
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pengarang</div>

                <div class="card-body">
                   <form action="{{route('pengarangs.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Nama Pengarang</label>
                        <input type="text" class="form-control" name="nama_pengarang" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

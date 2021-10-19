@extends('layouts.admin', ['title' => 'Create'])

@section('contents')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Tambah Pengarang Buku</div>
                <div class="card-body">
                    <form action="{{ route('pengarangs.store') }}" method="POST" accept="">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif

                        <div class="form-group">
                        <div class="col-lg-12">
                            Masukan Nama Pengarang
                        </div>

                        <div class="col-lg-12">
                            <input type="text" value="{{old('nama_pengarang')}}" class="form-control" name="nama_pengarang"
                            placeholder="Masukan Nama Pengarang">
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                Masukan Email Pengarang
                            </div>

                            <div class="col-lg-12">
                                <input type="email" value="{{old('email')}}" class="form-control" name="email"
                                placeholder="Masukan Email Pengarang">
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    Masukan Nomor Telepon Pengarang
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" class="form-control" name="telepon"
                                    placeholder="Masukan Nomor Telepon Pengarang">
                                </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger">Simpan Data</button>
                                    </div>
                                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

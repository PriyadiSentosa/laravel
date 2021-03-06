@extends('layouts.admin')
@section('judul')
Halaman Books

@endsection
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books edit</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Books edit {{ $id }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

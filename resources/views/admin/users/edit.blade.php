@extends('layouts.admin')
@section('judul')
Halaman User

@endsection
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users edit</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Users edit {{ $id }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

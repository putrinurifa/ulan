@extends('admin.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pesanan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID: </b>{{$admin->id}}</li>
                    <li class="list-group-item"><b>Jenis: </b>{{$admin->jenis}}</li>
                    <li class="list-group-item"><b>Jumlah: </b>{{$admin->jumlah}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$admin->harga}}</li>
                    <li class="list-group-item"><b>No Handphone: </b>{{$admin->no_handphone}}</li>
                </ul>
            </div>
            <a class="btn btn-success mx-3" href="{{ route('admin.index') }}">Kembali</a>
            <div class="d-flex justify-content-between">
                <a class="btn m-3 {{isset($prev->id) ? 'btn-outline-primary' : 'disabled' }}" href="{{ isset($prev->id) ? route('admin.show', $prev->id) : '' }}"><i class="fas fa-chevron-left"></i> Sebelumnya</i></a>
                <a class="btn m-3 {{isset($next->id) ? 'btn-outline-primary' : 'disabled' }}" href="{{ isset($next->id) ? route('admin.show', $next->id) : '' }}">Selanjutnya <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
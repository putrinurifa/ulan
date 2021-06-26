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
                    <li class="list-group-item"><b>ID: </b>{{$convection->id}}</li>
                    <li class="list-group-item"><b>Jenis: </b>{{$convection->jenis}}</li>
                    <li class="list-group-item"><b>Jumlah: </b>{{$convection->jumlah}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$convection->harga}}</li>
                    <li class="list-group-item"><b>No Handphone: </b>{{$convection->no_handphone}}</li>
                </ul>
            </div>
            <a class="btn btn-success mx-3" href="{{ route('convection.index') }}">Kembali</a>
            <div class="d-flex justify-content-between">
                <a class="btn m-3 {{isset($prev->id) ? 'btn-outline-primary' : 'disabled' }}" href="{{ isset($prev->id) ? route('convection.show', $prev->id) : '' }}"><i class="fas fa-chevron-left"></i> Sebelumnya</i></a>
                <a class="btn m-3 {{isset($next->id) ? 'btn-outline-primary' : 'disabled' }}" href="{{ isset($next->id) ? route('convection.show', $next->id) : '' }}">Selanjutnya <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
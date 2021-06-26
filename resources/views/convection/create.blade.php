@extends('admin.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Pesanan
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('convection.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Id">ID</label>
                        <input type="text" name="id" class="form-control" id="Id" aria-describedby="Id">
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="Jenis" aria-describedby="Jenis">
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="Jumlah" aria-describedby="Jumlah">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="Harga" aria-describedby="Harga">
                    </div>
                    <div class="form-group">
                        <label for="No_Handphone">No_Handphone</label>
                        <input type="number" name="no_handphone" class="form-control" id="No_Handphone" aria-describedby="No_Handphone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
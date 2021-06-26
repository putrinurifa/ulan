@extends('layouts.pesan')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('convection.update', $convection->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Id">ID</label>
                        <input type="text" name="id" class="form-control" id="Id" value="{{ $convection->id }}" aria- describedby="ID">
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="Jenis" value="{{ $convection->jenis }}" aria- describedby="Jenis">
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="Jumlah" name="jumlah" class="form-control" id="Jumlah" value="{{ $convection->jumlah }}" aria- describedby="Jumlah">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="harga" class="form-control" id="Harga" value="{{ $convection->harga }}" aria- describedby="Harga">
                    </div>
                    <div class="form-group">
                        <label for="No_Handphone">No_Handphone</label>
                        <input type="No_Handphone" name="no_handphone" class="form-control" id="No_Handphone" value="{{ $convection->no_handphone }}" aria- describedby="No_Handphone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
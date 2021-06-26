<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'admin') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
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
                <form method="post" action="{{ route('admin.update', $admin->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Id">ID</label>
                        <input type="text" name="id" class="form-control" id="Id" value="{{ $admin->id }}" aria- describedby="ID">
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="Jenis" value="{{ $admin->jenis }}" aria- describedby="Jenis">
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="Jumlah" name="jumlah" class="form-control" id="Jumlah" value="{{ $admin->jumlah }}" aria- describedby="Jumlah">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="harga" class="form-control" id="Harga" value="{{ $admin->harga }}" aria- describedby="Harga">
                    </div>
                    <div class="form-group">
                        <label for="No_Handphone">No_Handphone</label>
                        <input type="No_Handphone" name="no_handphone" class="form-control" id="No_Handphone" value="{{ $admin->no_handphone }}" aria- describedby="No_Handphone">
                    </div>
                    <a class="btn btn-danger mx-3" href="{{ route('admin.index') }}">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
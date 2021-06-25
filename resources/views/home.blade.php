
@extends('layouts.user')

@section('content')
 <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
           <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Konveksi, Sablon, dan Printing</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Sejak 2019</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Masukkan Pesanan</a>
                </div>
            </div>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right my-2">
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>No_Handphone</th>
            <th width="280px">Action</th>
        </tr>
    </table>
@endsection

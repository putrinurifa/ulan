
@extends('layouts.pesan')

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
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('convection.create') }}">Masukkan Pesanan</a>
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

    <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2" >
                <h2 align='center'>DATA PESANAN</h2>
            </div>
                <form class="float-right form-inline" id="searchForm" method="get" action="{{ ('/convection/cari')}}" role="search">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" id="Keyword" aria-describedby="Keyword" placeholder="Keyword" value="{{request()->query('keyword')}}">
                    </div>
                    <button type="submit" class="btn btn-primary mx-2">Cari</button>
                    <a href="{{ ('/convection/cari')}}">
                        <button type="button" class="btn btn-danger">Reset</button>
                     </a>
                </form>
        </div><br><br>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>No_Handphone</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($convections as $convection)
        <tr>
            <th>{{ $convection->id}}</th>
            <th>{{ $convection->jenis}}</th>
            <th>{{ $convection->jumlah}}</th>
            <th>{{ $convection->harga}}</th>
            <th>{{ $convection->no_handphone}}</th>
            <th>
            <form action="{{route('convection.destroy', $convection->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('convection.show', $convection->id) }}">Show</a>
            </form>
            </th>
        </tr>
        @endforeach
    </table>
    <div class="d-flex">
        {{ $convections->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection

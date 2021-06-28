@extends('admin.tamplate')
@section('content')

    <div class="col-lg-12 margin-tb">
      <div class="pull-left mt-12" >
        <h2 align='center'>DATA TRANSAKSI</h2>
      </div>
      <form class="float-right form-inline" method="get" action="{{ route('search1') }}">
        <div class="form-group">
          <input type="text" name="search1" class="form-control" id="search1" aria-describedby="search1" placeholder="Masukkan ID">
        </div>
          <button type="submit" class="btn btn-primary mx-2">Cari</button>
            <a href="{{ route('admin.index') }}">
              <button type="button" class="btn btn-danger">Reset</button>
            </a>
      </form>
    </div><br><br>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>No_Handphone</th>
        <th width="280px">Action</th>
      </tr>

      @foreach ($admins as $admin)
      <tr>
        <th>{{ $admin->id}}</th>
        <th>{{ $admin->jenis}}</th>
        <th>{{ $admin->jumlah}}</th>
        <th>{{ $admin->harga}}</th>
        <th>{{ $admin->no_handphone}}</th>
        <th>
          <form action="{{route('admin.destroy', $admin->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('admin.show', $admin->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('admin.edit', $admin->id) }}">Edit</a>
              @csrf
              @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </th>
      </tr>
        @endforeach
    </table>
    <div class="d-flex">
        {{ $admins->links('pagination::bootstrap-4') }}
    </div>
@endsection
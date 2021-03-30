@extends('barang.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DAFTAR BARANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{route('barang.create')}}"> Input Barang</a>
            </div>
            <div class="float-left my-2">
                <p> Cari data Barang : </p>
                <form action="{{'/cari'}}" method="GET">
                    <input type="text" name="cari" placeholder="Cari barang .." value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
            </div>
        </div>
    </div>

    @if ($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
   @endif

   <table class="table table-bordered">
       <tr>
           <th>Id Barang</th>
           <th>Kode Barang</th>
           <th>Nama Barang</th>
           <th>Kategori Barang</th>
           <th>Harga</th>
           <th>Qty</th>
           <th width="280px">Action</th>
        </tr>

        @foreach ($barang as $brg)
            <tr>
                <td>{{$brg->id_barang}}</td>
                <td>{{$brg->kode_barang}}</td> 
                <td>{{$brg->nama_barang}}</td>
                <td>{{$brg->kategori}}</td>
                <td>{{$brg->harga}}</td>
                <td>{{$brg->qty}}</td>
                <td> 
                    <form action="{{route('barang.destroy',$brg->id_barang)}}" method="POST">
                        <a class="btn btn-info" href="{{route('barang.show',$brg->id_barang)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('barang.edit',$brg->id_barang)}}">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
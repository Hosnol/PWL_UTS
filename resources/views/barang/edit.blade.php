@extends('barang.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem">
                <div class="card-header">
                    Edit Barang
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong> Whoops!!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('barang.update', $barang->id_barang) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Id_barang">Id Barang</label>
                                <br><input type="text" name="id_barang" readonly value={{ $barang->id_barang }} id="id_barang" aria-describedby="id_barang" >
                            </div>
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <br><input type="kode_barang" name="kode_barang" class="formcontrol" value={{ $barang->kode_barang }} id="kode_barang" aria-describedby="kode_barang" >
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <br><input type="nama_barang" name="nama_barang" class="formcontrol" value={{ $barang->nama_barang }} id="nama_barang" aria-describedby="nama_barang" >
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori Barang</label>
                                <br><select name="kategori">
                                    <option>{{ $barang->kategori }}</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Snack">Snack</option>
                                    <option value="ATK">ATK</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Barang</label>
                                <br><input type="harga" name="harga" class="formcontrol" value={{ $barang->harga}} id="harga" aria-describedby="harga" >
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty Barang</label>
                                <br><input type="qty" name="qty" class="formcontrol" value={{ $barang->qty }} id="qty" aria-describedby="qty" >
                            </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('barang.index') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
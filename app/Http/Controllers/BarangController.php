<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Database\Seeders\BarangSeeder;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::paginate(5);
        return view ('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success','Barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_barang)
    {
        $barang = Barang::find($id_barang);
        return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        $barang = barang::find($id_barang);
        return view ('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Barang::find($id_barang)->update($request->all());
        return redirect()->route('barang.index')->with('success','Barang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barang)
    {
        Barang::find($id_barang)->delete();
        return redirect()->route('barang.index')->with('success','Barang berhasil dihapus');
    }

    public function cari(Request $request){
        //melakukan validasi data
        $cari=$request->cari;

        $Barang = Barang::where('nama_barang','like','%'.$cari.'%')
        ->orwhere('kode_barang','like','%'.$cari.'%')
        ->orwhere('kategori','like','%'.$cari.'%')
        ->paginate(5);

        return view('barang.index',['barang'=>$Barang]);
    }
}

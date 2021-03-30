<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'kode_barang' => 'PRD001',
            'nama_barang' => 'Indomie',
            'kategori' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'],
        [
            'kode_barang' => 'PRD002',
            'nama_barang' => 'Pocari Sweat',
            'kategori' => 'Minuman',
            'harga' => '6000',
            'qty' => '50'],
        [    
            'kode_barang' => 'PRD003',
            'nama_barang' => 'Silverqueen',
            'kategori' => 'Snack',
            'harga' => '12500',
            'qty' => '45'],
        [    
            'kode_barang' => 'PRD004',
            'nama_barang' => 'Pensil 2B',
            'kategori' => 'ATK',
            'harga' => '2500',
            'qty' => '25'],
        [    
            'kode_barang' => 'PRD005',
            'nama_barang' => 'Mie Sedap',
            'kategori' => 'Makanan',
            'harga' => '2500',
            'qty' => '100'],
        [    
            'kode_barang' => 'PRD006',
            'nama_barang' => 'AQUA',
            'kategori' => 'Minuman',
            'harga' => '5000',
            'qty' => '50'],
        [    
            'kode_barang' => 'PRD007',
            'nama_barang' => 'Choky-choky',
            'kategori' => 'Snack',
            'harga' => '10000',
            'qty' => '70'],
        [    
            'kode_barang' => 'PRD008',
            'nama_barang' => 'Buku Tulis',
            'kategori' => 'ATK',
            'harga' => '4000',
            'qty' => '40'],
        [    
            'kode_barang' => 'PRD009',
            'nama_barang' => 'La Pasta',
            'kategori' => 'Makanan',
            'harga' => '20000',
            'qty' => '25'],
        [    
            'kode_barang' => 'PRD010',
            'nama_barang' => 'Larutan Penyegar',
            'kategori' => 'Minuman',
            'harga' => '7500',
            'qty' => '20'],
        [    
            'kode_barang' => 'PRD011',
            'nama_barang' => 'Beng-Beng',
            'kategori' => 'Snack',
            'harga' => '2500',
            'qty' => '50'],
        [    
            'kode_barang' => 'PRD012',
            'nama_barang' => 'Penghapus',
            'kategori' => 'ATK',
            'harga' => '5000',
            'qty' => '30'],
        [    
            'kode_barang' => 'PRD013',
            'nama_barang' => 'Sari roti',
            'kategori' => 'Makanan',
            'harga' => '10000',
            'qty' => '25'],
        [    
            'kode_barang' => 'PRD014',
            'nama_barang' => 'Alamo',
            'kategori' => 'Minuman',
            'harga' => '4000',
            'qty' => '40'],
        [    
            'kode_barang' => 'PRD015',
            'nama_barang' => 'Tick-tick',
            'kategori' => 'Snack',
            'harga' => '8000',
            'qty' => '50'],
        [    
            'kode_barang' => 'PRD016',
            'nama_barang' => 'Penggaris',
            'kategori' => 'ATK',
            'harga' => '2500',
            'qty' => '10'],
        [    
            'kode_barang' => 'PRD017',
            'nama_barang' => 'Nabati',
            'kategori' => 'Makanan',
            'harga' => '',
            'qty' => ''],
        [    
            'kode_barang' => 'PRD018',
            'nama_barang' => 'Teh Rio',
            'kategori' => 'Minuman',
            'harga' => '5000',
            'qty' => '100'],
        [    
            'kode_barang' => 'PRD019',
            'nama_barang' => 'Biskuit roma',
            'kategori' => 'Snack',
            'harga' => '10000',
            'qty' => '25'],
        [    
            'kode_barang' => 'PRD020',
            'nama_barang' => 'Maps',
            'kategori' => 'ATK',
            'harga' => '2500',
            'qty' => '50'],
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $harga  =   rand(0, 99999);
        $jumlah =   rand(0, 99999);

        $subtotal=  $harga * $jumlah;

        $transaksi  =   DB::table('transaksi')->get('id');

        foreach( $transaksi as $val ){
            DB::table('detail_transaksi')->insert([
                'id_transaksi' => $val->id,
                'harga' => $harga,
                'jumlah' => $jumlah,
                'subtotal' =>  $subtotal,
            ]);
        }
    }
}

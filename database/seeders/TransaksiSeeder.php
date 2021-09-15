<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            'tanggal_order' => \Carbon\Carbon::now()->subMinutes(rand(1, 55)),
            'status_pelunasan' => rand(0,1),
            'tanggal_pembayaran' => \Carbon\Carbon::now()->subMinutes(rand(1, 55)),
        ]);
    }
}

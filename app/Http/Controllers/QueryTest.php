<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryTest extends Controller
{
    public function index()
    {   
        $transaksi  =   DB::table('transaksi')
                        ->join('detail_transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id')
                        ->get();

//        dd( $transaksi );

        return view('QueryTest.index')->with( compact('transaksi') );
    }
}

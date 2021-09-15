<?php

namespace App\Http\Controllers\CodingTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConvertBilangan extends Controller
{
    public function index()
    {
        return view('CodingTest.ConvertBilangan');
    }

    public function binaryToDecimal( Request $request )
    {

        $binary = str_split($request['binary_value']);
        $reversed = array_reverse($binary);
        $result = 0;

        for($x = 0; $x < count($reversed); $x++) {
            if($reversed[$x] == 1) {
                $result += pow(2, $x);
            }
        }

        dd( $result );

    }

    public function decimalToBinary( Request $request )
    {
        $decimal     =   $request['decimal_value'];

        $a           =   [];

        // 
        $i = 0;
        while( $decimal > 0 )
        {
            $a[$i]  = $decimal % 2;
            $decimal = $decimal / 2;
            $i++;
        }

        dd( $a );

        $result     =   0;

        for( $i = $i-1; $i >= 0; $i--)
        {
            $result .= $a[$i];
        }

        dd( $result );
    }
}

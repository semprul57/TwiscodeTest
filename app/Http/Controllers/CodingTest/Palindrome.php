<?php

namespace App\Http\Controllers\CodingTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Palindrome extends Controller
{
    public function index()
    {
        return view('CodingTest/Palindrome');
    }

    public function Proses( Request $request )
    {

        $string     =   $request['palindrome_value'];

        $strArr = array();
        for( $i=0; $i<strlen( $string ); $i++ )  
        {  
            $palindrome = true; 
            $offset = 1; 
            
            while( $palindrome )  
            { 
                $word = substr( $string, $i - $offset, ($offset*2)+1 ); 
                if( $word == strrev( $word ) ) { 
                    $strArr[$word] = strlen( $word );           
                } else { 
                    $palindrome = false; 
                } 

                $offset++; 
            } 


        } 

        $finArr = max($strArr);
        echo $key = array_search ($finArr, $strArr);
    }
}

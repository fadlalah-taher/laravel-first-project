<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
    public function sayHi(){
        echo "hi";
    }
    public function sayBye(){
        echo "hi";
    }
    public function palindrome(){
        $array = ['lks', 'tel', 'lol', 'abcba', 'north'];
        $count = 0;
        foreach ($array as $item){
            if($item == strrev($item)){
                $count ++;
            }
        }
        echo $count;
    }



}
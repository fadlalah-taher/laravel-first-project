<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
    public function sayHi(){
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

    public function time(){
        $year = 31536000*238;
        $seconds = time() + $year;
        echo $seconds;
    }



    public function higherPro(){
        $array=["Pablo","Nour","Mohamad","Pablo","Fouad","Hadi","Ali","Pablo","oula","eli","Pablo"];
        $result=rand(0,count($array));
        echo $array[$result];
    }



}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
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

    public function studentlist(){
        $i = 0;
        $j = 1;
        $students=["Pablo","Nour","Mohamad","Pablo","Fouad","Hadi","Ali","Pablo","oula","eli","Pablo", "Hoda"];
        for($x = 0; $x <= count($students)-1; $x++){
            echo $students[$j];
            echo " ";
            echo $students[$i];
            echo "<br>";
            if($i+2 == count($students)-1 || $j+2 == count($students)-1){
                $i = $i +2;
                $j = $j +2;
                echo $students[$j];
                echo " ";
                echo $students[$i];
                echo "<br>";
                return "finish";
            }
            $i = $i +2;
            $j = $j +2;
        }
    }


    public function higherPro(){
        $array=["Pablo","Nour","Mohamad","Pablo","Fouad","Hadi","Ali","Pablo","oula","eli","Pablo"];
        $length = count($array)-1;
        $result = rand(0, $length);
        echo $array[$result];
    }



}
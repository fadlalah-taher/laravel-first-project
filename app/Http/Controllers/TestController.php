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
        $days = 105*864000;
        $seconds = time() + $year -$days;
        echo $seconds;
    }

    public function text(){
        $content = file_get_contents("https://icanhazdadjoke.com/slack");
        $data = json_decode($content, $assoc = false);
        echo json_encode($content['attachments']['text']);
        
    }

    public function beers(){
        $content = file_get_contents("https://api.punkapi.com/v2/beers");
        $data = json_decode($content, $assoc = false);
        $randIndex = rand(0, count($data)-1);
        echo json_encode($data[$randIndex]);
    }

    public function studentlist(){
        $i = 0;
        $j = 1;
        $students=["Pablo","Nour","Mohamad","Pablo","Fouad","Hadi","Ali","Pablo","oula","eli","Pablo", "Hoda", "fadel"];
        for($x = 0; $x <= count($students)-1; $x++){
            echo $students[$j];
            echo "  ";
            echo $students[$i];
            echo "<br>";
            if($i+2 > count($students)-1 || $j+2 > count($students)-1){
                if(count($students)-1 % 2 != 0 ){
                $i = $i +2;
                echo $students[$i];
                }
                return "";
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
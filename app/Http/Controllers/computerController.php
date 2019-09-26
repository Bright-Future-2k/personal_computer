<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class computerController extends Controller
{
    public function alert(){
        return view('/computer');
    }
    public function calculate(Request $request){
        $number1 = $request->num1;
        $number2 = $request->num2;
        $result = $request->calculate;
//        if ($result = "+"){
//            $alert = $number2 + $number1;
//            return $alert;
//        }else if ($result = "-"){
//            $alert1 = $number2 - $number1;
//            return $alert1;
//        }else if ($result = "x"){
//            $alert = $number2 * $number1;
//            return $alert;
//        }else if ($result = "/"){
//            $alert = $number2 / $number1;
//            return $alert;
//        }
        switch ($result){
            case '+':
                $alert = $number2 + $number1;
                echo '<h1>'.'Đáp án là:' . $alert .'</h1>';
                break;
            case '-':
                $alert = $number2 - $number1;
                echo '<h1>'.'Đáp án là:' . $alert .'</h1>';
                break;
            case 'x':
                $alert = $number2 * $number1;
                echo '<h1>'.'Đáp án là:' . $alert .'</h1>';
                break;
            case '/':
                $alert = $number2 / $number1;
                echo '<h1>'.'Đáp án là:' . $alert .'</h1>';
                break;

        }

        //return view('result');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    function create(){
        return view('home.reservation');
    }
   
    function send(Request $req){
        $req->validate([
            // バリデーション
            'name' => 'required',
            'phoneNumber' => 'required',
            'mail' => 'required',
            'calender' => 'required',
            'times' => 'required'
          ],
          [
            "name" => "名前は必須です！",
            "phoneNumber" => '電話番号は必須です！',
            "mail" => "メールアドレスは必須です！",
            "calender" => "日にちは必須です！",
            "times" => "時間帯は必須です！"
          ]
        );
        $name = $req->input("name");
        $phoneNumber = $req->input("phoneNumber");
        $mail = $req->input("mail");
        $calender = $req->input("calender");
        $times = $req->input("times");
        
        echo $name;
        echo $phoneNumber;
        echo $mail;
        echo $calender;
        echo $times;

        return view('home.confirm',compact('name','phoneNumber','mail','calender','times'));
    }
    function confirm(){
        return view('home.confirm');
    }
   
}

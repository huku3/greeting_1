<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{

    public function greeting($operator)
    {
        switch ($operator) {
            case 'morning':
                $time = '朝の';
                $result = 'おはようございます';
                break;
            case 'afternoon':
                $time = '昼の';
                $result = 'こんにちわ';
                break;
            case 'eveninng':
                $time = '夕方の';
                $result = 'こんばんわ';
                break;
            case 'night':
                $time = '夜の';
                $result = 'おやすみ';
                break;
        }
        return view('message.greeting', ['jikann' => $time, 'aisatsu' => $result]);
    }
    public function freeword($unnko)
    {
        return view('message.freeword', ['jiyuu' => $unnko]);
    }

    public function random($kimetsu_yaiba)

    {
        $kimetsu = [
            "俺は俺の責務を全うする!! ここにいる者は誰も死なせない!!",
            "頑張れ!! 人は心が原動力だから 心はどこまでも強くなれる!!",
            "生殺与奪の権を他人に握らせるな!!",
            "老いることも死ぬことも人間という儚い生き物の美しさだ 老いるからこそ死ぬからこそ 堪らなく愛おしく尊いのだ"
        ];
        $rand_key = array_rand($kimetsu);
        $kimetsu_yaiba = $kimetsu[$rand_key];
        return view('message.randmessage', ['rand' => $kimetsu_yaiba]);
    }
}

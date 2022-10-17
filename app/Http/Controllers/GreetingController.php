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
}

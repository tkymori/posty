<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectHp (Request $request) 
    {
        $key = $request->key;
        if ($key == 1) {
            $type = 1;
            $title = "１だよ";
            $discription = "1DISCRIPTION";
        } else if ($key == 2){
            $type = 2;
            $title = "2だよ";
            $discription = "2DISCRIPTION";
        }
        return view('tweet.index', compact('title', 'discription', 'type'));
    }
}

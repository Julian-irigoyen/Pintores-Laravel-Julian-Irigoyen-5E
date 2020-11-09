<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EstructurasDeControl extends Controller
{
    //
    public function login(){
    return view('admon.login');
    }

    public function validar(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('pass');
        $key = $request->input('key');

        if ($user === 'julian.irigoyen') {
            $url = 'admon.dashboard';
        } else {
            $url = 'admon.login';
        }
        return view($url, array(
                'user' => $request->input('user'),

        ));
    }

     public function Salvador(){
        return view('Salvador');
     }

    public function Marco(){
        return view('Marco');
    }

    public function Vincent(){
        return view('Vincent');
    }

    public function Leonardo(){
        return view('Leonardo');
    }

    public function Miguel(){
        return view('Miguel');
    }

    public function archivo(){
        return view('archivo');
    }

}

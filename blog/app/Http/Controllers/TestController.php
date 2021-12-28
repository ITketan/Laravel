<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    function other()
    {
        $d =  Http::get('https://gorest.co.in/public/v1/users');
        return view('test',['collect' => $d['data']]);
    }
}

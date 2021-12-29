<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function getData()
    {
        $data = User::paginate(2);
        return view('list',['users'=>$data]);
    }
}

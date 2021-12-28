<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserController extends Controller
{
    //
    function getData()
    {
        return user::all();
    }
}

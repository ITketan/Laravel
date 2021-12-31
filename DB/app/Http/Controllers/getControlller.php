<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class getControlller extends Controller
{
    //
    function list(Request $req){
        $data = member::all();
        return view('list',['members'=>$data]);
    }

    function delete($id){
        $data = member::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
        $data = member::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data = member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');

    }
}

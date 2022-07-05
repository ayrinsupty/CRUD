<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    
    //Show Data According To ID
    public function show($id) {
        $users = DB::select('select * from user where id = ?',[$id]);
        return view('update',['users'=>$users]);
    }

    //Update Data
    function edit(Request $request, $id) {
        $name  = $request->input('name');
        $email = $request->input('email');
        $skill = $request->input('skill');

        DB::update('update user set name=?,email=?,skill=? where id = ?',[$name,$email,$skill,$id]);
        return redirect('view');
    }
}

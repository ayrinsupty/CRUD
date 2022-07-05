<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    // Display Data
    function show(){
        $users = DB::select("select * from user");
        return view('view', ['users' => $users]);
    }
}

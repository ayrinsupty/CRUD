<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    //Show Data
    public function index(){
        $users = DB::select('select * from user');
        return view('view',['users'=>$users]);
    }
}

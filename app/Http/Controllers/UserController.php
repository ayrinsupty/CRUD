<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Insert Data
    function insert(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $skill = $req->input('skill');

        $data=array('name'=>$name,"email"=>$email, "skill"=>$skill);
        DB::table('user')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/create">Click Here</a> to go back.';
    }
}

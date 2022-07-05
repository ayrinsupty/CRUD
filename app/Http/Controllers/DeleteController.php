<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    //Delete Data
    function delete($id){
        DB::delete('delete from user where id = ?',[$id]);
        return redirect('view');
    }
}

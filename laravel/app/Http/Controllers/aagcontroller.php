<?php

namespace App\Http\Controllers;

use App\Models\leadership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class aagcontroller extends Controller
{
    public function showLead(){
        $leader = DB::select('select * from soldier');
        return view('leadership', ['leaders'=>$leader]);
    }
    
}

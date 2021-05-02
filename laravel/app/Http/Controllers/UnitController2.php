<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\unit;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  str  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('unit.index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller

{



    public function __construct()
    {
        $this->middleware('checkRole:admin');
        $this->middleware('auth');
    }



    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}

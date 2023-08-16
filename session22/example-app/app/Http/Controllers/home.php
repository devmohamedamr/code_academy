<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
        $res = category::all();
        
    }
}

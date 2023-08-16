<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function hi(){
        $name = "eslam";
        $colors = ["red","green","blue"];
        $usernames = ["devmohamed","ahmedww","eslamamr"];
        return view("mohamed",compact("name","colors","usernames"));
    }

    public function users(){
        $res=  DB::table("users")->get();
        return view("users",compact('res'));
    }

    public function register(){
        return view("register");
    }

    public function postRegister(Request $request){
        dd($request->email);
    }
}

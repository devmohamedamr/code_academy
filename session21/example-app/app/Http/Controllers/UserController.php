<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function loginRequest(Request $request)
    {
        $request->validate([
            "email"=>"required",
            "password"=>"required|min:8",
            "conpassword"=>"same:password"
        ]);

        dd($request);
    }

    public function product(){
    //    $res =  DB::table("product")->get();

       $res =  DB::table("product")
       ->join('category','category.id','=','product.category_id')
       ->select("product.*","category.name AS categoryname")
       ->get();
        dd($res);
    }
}

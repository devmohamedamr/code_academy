<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class stateController extends Controller
{
    public function state(){
        $state =  DB::table("state")->get();
        return view("register",compact("state"));
    }

    public function city($id){
        $city = DB::table('city')->where('sate_id',$id)->get();
        foreach($city as $value){
            echo "<option value='{$value->id}'>$value->name</opation>";
        }
    }
}

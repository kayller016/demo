<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return 'Hello from users';
    }

    public function show($id){
        
        $data=array(
            "id"=>$id,
            "name"=>"Christine Joy Almoite",
            "age"=>22,
            "email"=>"christinekayller016.almoite@gmail.com"
             );
         return view('user', $data);
    }
}

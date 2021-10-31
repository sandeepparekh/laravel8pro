<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class UsersController extends Controller
{
    public function index(){
        $name = "Sandeep Parekh";
        $users = array(
            "name"=>"sandeep parekh",
            "email"=>"Sandeepparekh10@gmail.com",
            "phone"=>"8879373209"
        );
        return view('users',compact('name','users'));
    }
}

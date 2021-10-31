<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name="Sandeep Parekh"){
        return "Hi i am from HomeController by ".$name;
    }
}

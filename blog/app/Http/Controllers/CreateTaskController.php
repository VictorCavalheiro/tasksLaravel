<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTaskController extends Controller
{
    function index(){
        return view('addTask');
    }
}

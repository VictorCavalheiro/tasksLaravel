<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectUserController extends Controller
{

    function validateRequest(Request $request){
        if($request->input('user')==='admin' && $request->input('password')==='admin'){
            return redirect()->action('TaskController@index');
        }
        else{
            return redirect()->action('ErrorController@index');
        }
    }

    
}

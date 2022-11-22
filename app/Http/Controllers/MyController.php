<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $name="Mouhameth";
        $age=21;
        $tab=array('name'=>"Mouhameth",'age'=>21);
    return view('MyView',$tab);
    }
}

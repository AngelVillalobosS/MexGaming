<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function indexView(){
        return view('index');
    }
}

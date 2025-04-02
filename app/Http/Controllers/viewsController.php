<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function indexView(){
        return view('index');
    }
    public function homeView(){
        return view('home');
    }
    public function insertEmployeeview(){
        return view('pages.insertEmployee');
    }
    public function insertProjectsView(){
        return view('pages.insertProyect');
    }
    public function reportProjectsView(){
        return view('pages.reportProjects');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function home(){
//        $menus = Menu::all();
//        $projects = Project::all();
////        dd($menus);
//        return view('welcome',['menus'=>$menus, 'projects'=>$projects]);
//    }

    public function index()
    {
        $menus = Menu::all();
        $projects = Project::all();
        $initialSection = request()->has('section') ? request()->section : null;
        return view('welcome', ['initialSection' => $initialSection, 'menus'=>$menus, 'projects'=>$projects]);
    }



}

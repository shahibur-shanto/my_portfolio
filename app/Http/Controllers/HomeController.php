<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        $menus = Menu::all();
        $projects = Project::all();
//        dd($menus);
        return view('welcome',['menus'=>$menus, 'projects'=>$projects]);
    }


}

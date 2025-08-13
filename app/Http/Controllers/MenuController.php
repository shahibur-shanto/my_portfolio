<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create_menu(){
        $result = Menu::create([
           'name'=>"Contact"
        ]);
        return $result;
    }

    public function welcome(){
        $menus = Menu::all();
//        dd($result);
        return view('welcome',['menus'=>$menus]);
    }
}

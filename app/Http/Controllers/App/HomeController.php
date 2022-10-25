<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Panel\ConfigController;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends ConfigController
{

    function __construct()
    {
        view()->share('menus',Menu::orderBy('number','asc')->get());
    }

    public function index()
    {
        $menu=Menu::where('catid',2)->get();
        $data=collect();
        $posts=collect();
        foreach ($menu as $key=>$name) {
            if($key==4) break;
            $pages=$this->dynamicModel($name->link)::where('status',1)->inRandomOrder()->limit(3)->with('menu')->get();
            foreach($pages as $page)
            {
                $posts->push($page);
            }
        }

        return view('app.pages.home')->with('posts',$posts);
    }
}
<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Panel\ConfigController;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Menu;
use Illuminate\Http\Request;

class ContentController extends ConfigController
{
    function __construct()
    {
        view()->share('menus',Menu::orderBy('number','asc')->get());
    }

    function index($menu)
    {
        
        try {
            $category=Menu::where('link',$menu)->first()->catid;
            $modal=$this->dynamicModel($menu)::where('status',1)->with('menu');
            if($category==1)
            {
                $page=$modal->latest()->first();
                return $page  ? view('app.pages.single.index')->with('page',$page) : back();
            }
            if($category==2)
            {
                $pages=$modal->orderBy('number','asc')->paginate(3);
                $id=Menu::where('link',$menu)->first()->id;
                $comment=Comment::where('menuid',$id)->get();
                return $pages->count()>0 ? view('app.pages.multi.index')->with('pages',$pages)->with('comment',$comment) : back();
            }
        } catch (\Throwable $th) {
            return view('app.pages.error');
        }
        
        
    }

    function show($menu,$id)
    {
        $page=$this->dynamicModel($menu)::where('id',$id)->with('menu')->first();
        $posts=$this->dynamicModel($menu)::where('id','!=',$id)->with('menu')->get();
        $comments=Comment::where('menuid',$page->menuid)->where('pageid',$id)->get();
        return view('app.pages.multi.detail')->with('page',$page)->with('posts',$posts)->with('comments',$comments);
    }

    function storeComment(CommentRequest $request)
    {
        try {
            Comment::create($request->validated());
            return back();
        } catch (\Throwable $th) {
            return back();
        }
        
    }
}

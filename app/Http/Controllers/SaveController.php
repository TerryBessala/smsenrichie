<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function save(Request $request)
    {

        $page=Page::where("page_id",$request->get('page_id'))->count();


        if($page)
        {
            $page=Page::where("page_id",$request->get('page_id'));
            $page->update([
                "css"=>$request->get('gjs-css'),
                "asset"=>$request->get('gjs-asset'),
                "style"=>$request->get('gjs-style'),
                "html"=>$request->get('gjs-html'),
                "page_id"=>$request->get('page_id'),
            ]);
        }
        else{

            $page=Page::create([
                "css"=>$request->get('gjs-css'),
                "asset"=>$request->get('gjs-asset'),
                "style"=>$request->get('gjs-style'),
                "html"=>$request->get('gjs-html'),
                "page_id"=>$request->get('page_id'),
            ]);
        }
    }

    public function preview($id)
    {
        $page=Page::where("page_id",$id)->get();
        $page=$page[0];
        return view('preview',compact('page'));
    }

    public function load(Request $request)
    {
        $page=Page::where("page_id",1)->get();

        $page=json_encode($page[0]);

        return $page;
    }

    public function test(){
        return view('test');
    }
}

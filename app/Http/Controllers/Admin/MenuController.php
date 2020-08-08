<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::all();
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::all();
        $pages=Page::all();
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type=$request->type;

        if ($type=='category'){
            $category=Categories::find($request->item);
            $menu=new Menu();
            $menu->name=$category->name;
            $menu->link='category/'.$category->slug;
            $menu->save();
            return response(json_encode([
                'save'=>'true'
                ]));
        }
        if ($type=='page'){
            $page=Page::find($request->item);
            $menu=new Menu();
            $menu->name=$page->title;
            $menu->link='page/'.$page->slug;
            $menu->save();
            return response(json_encode([
                'save'=>'true'
            ]));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if ($id=='category'){
            $categories=Categories::all();
            return response(json_encode([
               'categories'=> $categories
            ]));
        }
        if ($id=='page'){
            $pages=Page::all();
            return response(json_encode([
               'pages'=> $pages
            ]));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu=Menu::find($id);
        $menu->name=$request->name;
        $menu->save();
        return response(json_encode([
            'change'=>'true'
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        return response(json_encode([
            'delete'=>'true'
        ]));
    }

}

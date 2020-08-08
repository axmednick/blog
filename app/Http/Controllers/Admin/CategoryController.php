<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::where('parent',0)->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generalCategories=Categories::where('parent',0)->get();
        return view('admin.category.create',compact('generalCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required ',
            'description'=>'required ',
            'slug'=>'required',
            'parent'=>'required'
        ]);

        $category=new Categories();
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        $category->parent=$request->parent;
        $category->save();

        return back()->with('success','Kateqoriya yaradıldı');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generalCategories=Categories::where('parent',0)->get();
        $category=Categories::find($id);
        return view('admin.category.edit',compact('category','generalCategories'));
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
        $this->validate($request,[
            'name'=>'required ',
            'description'=>'required ',
            'slug'=>'required',
            'parent'=>'required'
        ]);

        $category=Categories::find($id);
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        $category->parent=$request->parent;
        $category->save();

        return back()->with('success','Kateqoriya Dəyişdirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Categories::find($id);
        $category->delete();

        return response(json_encode([
            'delete'=>'true'
        ]));
    }
}

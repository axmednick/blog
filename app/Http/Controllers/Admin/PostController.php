<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Image;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::all();
        $gallery=Gallery::all();
        return view('admin.post.create',compact('categories','gallery'));
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
            'title'=>'required',
            'description'=>'required',
            'image'=>'required | mimes:jpeg,jpg,gif,png',
            'post_content'=>'required',
            'category'=>'required'
        ]);
        $slug='';
        $countSlug=Post::where('slug','=',Str::slug($request->title))->count();

        if ($countSlug>0){
            $slug = Str::slug($request->title.'-'.microtime());
        }
        else{
            $slug = Str::slug($request->title);
        }

        $image=$request->file('image');
        $imageName=microtimeFileName($image);
        $image->move('uploads/post/',$imageName);

        $post=new Post();
        $post->title=$request->title;
        $post->slug=$slug;
        $post->category_id=$request->category;
        $post->content=$request->post_content;
        $post->image=$imageName;
        $post->description=$request->description;
        $post->gallery_id=$request->gallery;
        $post->save();

        return redirect('/admin/post')->with('success','Məqalə Dərc olundu');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::all();
        $categories=Categories::all();
        $post=Post::find($id);
        return view('admin.post.edit',compact('post','categories','gallery'));
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
            'title'=>'required',
            'description'=>'required',
            'post_content'=>'required',
            'category'=>'required'
        ]);

        $slug='';
        $countSlug=Post::where('slug','=',Str::slug($request->title))->count();

        if ($countSlug>0){
            $slug = Str::slug($request->title.'-'.microtime());
        }
        else{
            $slug = Str::slug($request->title);
        }
        $post=Post::find($id);

        $image=$request->file('image');
        if ($image){
            $imageName=microtimeFileName($image);
            $image->move('uploads/post/',$imageName);
            unlink('uploads/post/'.$post->image);
            $post->image=$imageName;
            $post->save();
        }
        $post->title=$request->title;
        $post->description=$request->description;
        $post->slug=$slug;
        $post->content=$request->post_content;
        $post->category_id=$request->category;
        $post->gallery_id=$request->category;
        $post->save();

        return redirect('/admin/post')->with('success','Uğurla dəyişdirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $image='uploads/post/'.$post->image;
        unlink($image);
        $post->delete();

        return response(json_encode([
            'delete'=>'true'
        ]));
    }
    public function imageUpload(Request $request){

      $image=$request->file('image');
      $imageName=microtimeFileName($image);
      $image->move('uploads/test/',$imageName);
      return url('/').'/uploads/test/'.$imageName;

    }
}

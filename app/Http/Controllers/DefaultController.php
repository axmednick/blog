<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Page;
use App\Post;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $lastOne=Post::all()->sortByDesc('id')->first();
        $lastFourPosts=Post::all()->sortByDesc('id')->take(4);
        $randomOne=Post::inRandomOrder()->limit(1)->get();
        $randomTo=Post::inRandomOrder()->limit(2)->get();
        $lastPosts=Post::orderBy('id')->paginate(8);
        return view('index',compact('lastOne','lastFourPosts','randomOne','randomTo','lastPosts'));
    }

    public function postView($categoy,$slug){
        $post=Post::where('slug',$slug)->first();
        return view('postView',compact('post'));
    }
    public function categoryView($slug){
        $category=Categories::where('slug',$slug)->first();
        $posts=Post::where('category_id',$category->id)->paginate(12);
        return view('categoryView',compact('posts'));
    }
    public function pageView($slug){
        $page=Page::where('slug',$slug)->first();
        return view('pageView',compact('page'));
    }
}

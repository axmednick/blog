<?php
/**
 * Created by PhpStorm.
 * User: 99455
 * Date: 8/8/2020
 * Time: 11:03 AM
 */

namespace App\Http\ViewComposer;


use App\Post;
use Illuminate\View\View;

class LastFourPostsComposer
{
    public function compose(View $view){
        $view->with('lastFourPosts',Post::all()->sortByDesc('id')->take(4));
    }

}
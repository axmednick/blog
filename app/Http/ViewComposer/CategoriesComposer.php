<?php
/**
 * Created by PhpStorm.
 * User: 99455
 * Date: 8/8/2020
 * Time: 11:00 AM
 */

namespace App\Http\ViewComposer;


use App\Categories;
use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view){
        $view->with('categories',Categories::where('parent',0)->get());
    }

}
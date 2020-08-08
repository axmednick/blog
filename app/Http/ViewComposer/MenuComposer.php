<?php
/**
 * Created by PhpStorm.
 * User: 99455
 * Date: 8/7/2020
 * Time: 11:48 PM
 */

namespace App\Http\ViewComposer;


use App\Menu;
use Illuminate\View\View;

class MenuComposer
{

    public function compose(View $view){

        $view->with('menus',Menu::all());
    }
}
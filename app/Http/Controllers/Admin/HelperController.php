<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HelperController extends Controller
{
    public function getCategorySlug(Request $request){

        $countSlug=Categories::where('slug','=',Str::slug($request->slug))->count();

        if ($countSlug>0){
            $slug = Str::slug($request->slug).$countSlug;
            return json_encode([
                'slug' => $slug
            ]);
            exit();

        }
        else{
            $slug = Str::slug($request->slug);
            return json_encode([
                'slug' => $slug
            ]);
        }

        }


}

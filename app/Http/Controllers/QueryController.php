<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function test()
    {
    	$categories = Category::all();
    	$categories = Category::where('name', 'chinese')->get();
    	$categories = Category::where('name', '!=', 'chinese')->get();
    	$categories = Category::where('name', 'like', 'c%')->get();
    	$categories = Menu::where('name', 'like', 'p%')->get();
    	$categories = Menu::where(['category_id' => 5, 'price' => 120])->get();
    	$categories = Menu::where('category_id', 5)->where('price', 120)->get();
    	$categories = Menu::where('category_id', '>', 1)->where('price', '>', 100)->get();
    	$categories = Menu::where([['name', 'like', 'p%'], 'price' => 120])->get();
    	$categories = Menu::where([['category_id', '>', 1], ['price', '>', 100]])->get();


    	foreach ($categories as $category) {
    		// dump($category);
    		dump($category->name);
    	}
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class QueryController extends Controller
{
    public function test()
    {
        // $route = Route::current();
        // $name = Route::currentRouteName();
        // $action = Route::currentRouteAction();
        // dump($route);
        // dump($name);
        // dump($action);
        // dd('done');
    	// $categories = Category::all();
    	// $categories = Category::where('name', 'chinese')->get();
    	// $categories = Category::where('name', '!=', 'chinese')->get();
    	// $categories = Category::where('name', 'like', 'c%')->get();
    	// $categories = Menu::where('name', 'like', 'p%')->get();
    	// $categories = Menu::where(['category_id' => 5, 'price' => 120])->get();
    	// $categories = Menu::where('category_id', 5)->where('price', 120)->get();
    	// $categories = Menu::where('category_id', '>', 1)->where('price', '>', 100)->get();
    	// $categories = Menu::where([['name', 'like', 'p%'], 'price' => 120])->get();
        // $categories = Menu::where([['category_id', '>', 1], ['price', '>', 100]])->get();

        // $categories = Category::find(2);
        // $categories = Menu::where([['category_id', '>', 1], ['price', '>', 100]])->first();
        // $categories = Menu::where([['category_id', '>', 1], ['price', '>', 100]])->get()->last();

        // $categories = Menu::where('category_id', '>', 2)->sum('price');
        // $categories = Menu::where('category_id', '>', 2)->max('price');
        // $categories = Menu::where('category_id', '>', 2)->min('price');
        // $categories = Menu::where('category_id', '>', 2)->count();
        // $categories = Menu::where('category_id', '>', 2)->avg('price');

        // $categories = Menu::where('category_id', 5)->orWhere('category_id', 2)->get();
        // $categories = Menu::whereColumn('created_at', 'updated_at')->get();
        // $categories = Menu::whereDate('created_at', '>', Carbon::now()->subDays(7)->toDateString())->get();
        // $categories = Menu::whereMonth('created_at', '>=', 6)->get();
        // $categories = Menu::whereYear('created_at', '>=', 2019)->get();
        // $categories = Menu::whereDay('created_at', '>=', 16)->get();
        // $categories = Menu::whereTime('created_at', '>=', Carbon::now()->toTimeString())->get();

        // $categories = Menu::where('price', '>', 60)->where(function($query){
        //     $query->where('category_id', 2)
        //         ->orWhere('category_id', 3);
        // })->get();

        // $categories = Menu::groupBy('updated_at')->toSql();
        // $categories = Menu::groupBy('updated_at')->get();
        // $categories = Menu::select(['name', 'price', DB::raw('COUNT(*) AS total')])->groupBy('updated_at')->get();
        // $categories = Menu::selectRaw('COUNT(*) AS total')->groupBy('updated_at')->get();
        // $categories = Menu::whereRaw('price > 60 AND (category_id = 2 OR category_id = 3)')->get();
        // $categories = Menu::selectRaw('distinct price')->get();
        // $categories = Menu::select('price')->distinct()->get();

        // $categories = Menu::orderBy('name')->get();
        // $categories = Menu::orderBy('name', 'desc')->get();
        // $categories = Menu::orderBy('name')->take(2)->get();
        // $categories = Menu::orderBy('name')->limit(2)->get();
        // $categories = Menu::orderBy('name')->skip(2)->take(2)->get();
        // $categories = Menu::orderBy('name')->offset(2)->take(2)->get();\

        // $categories = Menu::select(['menus.*', 'categories.name AS c_name'])->join('categories', 'menus.category_id', '=', 'categories.id')->get();
        // $categories = Menu::select(['menus.*', 'categories.name AS c_name'])->crossjoin('categories')->get();
        // dd($categories);

        // $categories = Menu::with('category')->get();
        // $categories = Menu::with('category')->get()->toArray();
        // $categories = Menu::get();
        $categories = Category::get();
        // $categories = Category::withCount('menus')->get();

        // DB::enableQueryLog();
        $categories = Category::with(['menus' => function($query){
            $query->where('price', '>', 100);
        }])->where('id', '>', 3)->get();
        // dd(DB::getQueryLog());
        // $categories = Category::has('menus')->get(); 
        // $categories = Category::whereHas('menus', function($query){
        //     $query->where('price', '>', 100);
        // })->get()->toArray(); 
        dd($categories);

    	foreach ($categories as $key => $category) {
            // dump($category->menus);
            // dump($category->name);
            // dump($category->menus()->where('price', '>', 100)->count());
            // dump($category->menus()->exists());
            // dump($category->menus()->doesntExist());
      //       dump($key);
    		// dump($menu);
    		// dump($category->menus);
            // dump($menu->name . "--------------" . $menu->category->name);
            // dump($menu['name'] . "--------------" . $menu['category']['name']);
            // dump($category->name . "--------------" . $category->c_name);

            // foreach ($category->menus as $menu) {
            //     dump($menu->name);
            // }
    	}
    }

    public function home()
    {
        dd('123');
        return view('home');
    }
}
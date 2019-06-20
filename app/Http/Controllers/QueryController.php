<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function test()
    {
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

        $categories = Category::find(2);
        $categories = Menu::where([['category_id', '>', 1], ['price', '>', 100]])->first();
        $categories = Menu::where([['category_id', '>', 1], ['price', '>', 100]])->get()->last();

        $categories = Menu::where('category_id', '>', 2)->sum('price');
        $categories = Menu::where('category_id', '>', 2)->max('price');
        $categories = Menu::where('category_id', '>', 2)->min('price');
        $categories = Menu::where('category_id', '>', 2)->count();
        $categories = Menu::where('category_id', '>', 2)->avg('price');

        $categories = Menu::where('category_id', 5)->orWhere('category_id', 2)->get();
        $categories = Menu::whereColumn('created_at', 'updated_at')->get();
        $categories = Menu::whereDate('created_at', '>', Carbon::now()->subDays(7)->toDateString())->get();
        $categories = Menu::whereMonth('created_at', '>=', 6)->get();
        $categories = Menu::whereYear('created_at', '>=', 2019)->get();
        $categories = Menu::whereDay('created_at', '>=', 16)->get();
        $categories = Menu::whereTime('created_at', '>=', Carbon::now()->toTimeString())->get();

        $categories = Menu::where('price', '>', 60)->where(function($query){
            $query->where('category_id', 2)
                ->orWhere('category_id', 3);
        })->get();

        $categories = Menu::groupBy('updated_at')->toSql();
        $categories = Menu::groupBy('updated_at')->get();
        $categories = Menu::select(['name', 'price', DB::raw('COUNT(*) AS total')])->groupBy('updated_at')->get();
        $categories = Menu::selectRaw('COUNT(*) AS total')->groupBy('updated_at')->get();
        $categories = Menu::whereRaw('price > 60 AND (category_id = 2 OR category_id = 3)')->get();
        $categories = Menu::selectRaw('distinct price')->get();
        $categories = Menu::select('price')->distinct()->get();
        dd($categories);

    	foreach ($categories as $key => $category) {
      //       dump($key);
    		// dump($category);
    		dump($category->name);
    	}
    }
}

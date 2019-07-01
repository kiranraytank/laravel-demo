<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Staff;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        // $staff = factory(Staff::class, 10)->make();
        // $staff = factory(Staff::class, 10)->create();
        $staff = Staff::where('type', 'cook')->get();
        $specialMenus = Menu::where(['active' => 1, 'special' => 1])->get();
        $categories = Category::where('active', 1)->get();
        $menus = Menu::where(['active' => 1])->get();
    	// return view('pages.home')->with(['staff' => $staff]);
        // return view('pages.home')->with('staff', $staff);
        // return view('pages.home', ['staff' => $staff]);
        return view('pages.home', compact('staff', 'specialMenus', 'categories', 'menus'));
    }

    public function about() {
    	return view('pages.about');
    }

    public function menu() {
    	return view('pages.menu');
    }

    public function contact() {
    	return view('pages.contact');
    }
}

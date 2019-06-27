<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        // $staff = factory(Staff::class, 10)->make();
        // $staff = factory(Staff::class, 10)->create();
        $staff = Staff::where('type', 'cook')->get();
    	// return view('pages.home')->with(['staff' => $staff]);
        // return view('pages.home')->with('staff', $staff);
        // return view('pages.home', ['staff' => $staff]);
        return view('pages.home', compact('staff'));
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

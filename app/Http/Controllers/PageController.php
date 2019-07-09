<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Mail\MarkdownMail;
use App\Mail\OrderMail;
use App\Models\Category;
use App\Models\Menu;
use App\Notifications\OrderNotifiation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home() {
        // Mail::to('chiragpatel1295@gmail.com')->send(new OrderMail());
        $user = User::find(2);
        $user->notify(new OrderNotifiation());
        // Mail::to($user->email)->send(new MarkdownMail($user));
        dd('mail sent');

        // $staff = factory(Staff::class, 10)->make();
        // $staff = factory(Staff::class, 10)->create();
        $staff = Admin::where('type', 'cook')->get();
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

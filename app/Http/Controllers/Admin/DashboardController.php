<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
    	dump('in controller');
    	return view('admin.pages.dashboard');
    }
}

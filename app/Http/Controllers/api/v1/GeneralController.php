<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
	private function categoryFields($categories) {
		$fields = [];

		foreach ($categories as $category) {
			$fields[] = ['id' => $category->id, 'name' => $category->name];
		}

		return $fields;
	}

	private function menuFields($menus) {
		$fields = [];

		foreach ($menus as $menu) {
			$fields[] = ['id' => $menu->id, 'name' => $menu->name, 'price' => $menu->price];
		}

		return $fields;	
	}

    public function categories() {
    	$categories = Category::where(['active' => 1])->get();
    	$this->response['data'] = $this->categoryFields($categories);
    	$this->response['message'] = 'Categories retrived successfully.';
    	$this->status = 200;
    	return $this->return_response();
    }

    public function menus(Request $request) {
    	$rules = [
    		'category_id' => 'required|numeric',
    	];

    	if($this->apiValidation($request->all(), $rules)) {
    		$menus = Menu::where(['category_id' => $request->category_id, 'active' => 1])->get();
    		$this->response['data'] = $this->menuFields($menus);
    		$this->response['message'] = 'Menus retrived successfully.';
    		$this->status = 200;
    	}
    	return $this->return_response();	
    }
}

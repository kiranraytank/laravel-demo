<?php

namespace App\Http\Viewcomposer;

use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MenuComposer 
{
	protected $menu;

	function __construct(){
		$this->menu = [];
		if(!empty(Auth::user())){
			$user_permissions = unserialize(Auth::user()->permissions);
			// dd($user_permissions);
			$sections = Section::where('active', 1)->orderBy('sequence')->get();
			
			foreach ($sections as $section) {
				$menu_data = [];
				$menu_data['name'] = $section->name;
				$menu_data['icon'] = $section->icon;

				foreach ($section->roles as $role) {
					if(array_key_exists($role->id, $user_permissions) && !empty($user_permissions[$role->id])) {
						$menu_data['roles'][] = ['name' => $role->name, 'icon' => $role->icon, 'route' => $role->route];
					}
				}

				$this->menu[] = $menu_data;
			}
		}
	}

	public function compose(View $view) {
		$data = [];
		$data['menus'] = $this->menu;
		return $view->with($data);
	}
}

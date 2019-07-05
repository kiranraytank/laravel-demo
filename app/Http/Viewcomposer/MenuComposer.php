<?php

namespace App\Http\Viewcomposer;

use App\Models\Section;

class MenuComposer 
{
	function __construct(){
		$sections = Section::where('active', 1)->orderBy('sequence')->get();
		dd($sections);

	}
}

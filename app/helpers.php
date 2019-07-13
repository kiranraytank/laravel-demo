<?php

function getPermissions($type='user')
{
	$permissions = [];
	if($type == 'admin') {
		$permissions = [
			1 => "access,download",
			2 => "access,add,edit,view,delete",
			3 => "access,add,edit,view,delete",
			4 => "access,add,edit,view,delete",
			5 => "access,add,edit,view,delete",
			6 => "access,add,edit,view,delete",
		];
	}

	return $permissions;
}
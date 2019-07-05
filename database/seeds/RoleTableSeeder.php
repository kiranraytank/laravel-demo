<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	[
        		'section_id' => 'Dashboard',
        		'name' => 'Dashboard',
        		'icon' => 'mdi-home',
        		'sequence' => 1,
        		'permissions' => 'access,download',
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'section_id' => 'Manage Categories',
        		'name' => 'Manage Categories',
        		'icon' => 'mdi-home',
        		'sequence' => 1,
        		'permissions' => 'access,add,edit,view,delete',
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'section_id' => 'Manage Menus',
        		'name' => 'Manage Menus',
        		'icon' => 'mdi-home',
        		'sequence' => 1,
        		'permissions' => 'access,add,edit,view,delete',
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'section_id' => 'Manage Users',
        		'name' => 'Manage Staff',
        		'icon' => 'mdi-home',
        		'sequence' => 1,
        		'permissions' => 'access,add,edit,view,delete',
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'section_id' => 'Manage Users',
        		'name' => 'Manage Customers',
        		'icon' => 'mdi-home',
        		'sequence' => 2,
        		'permissions' => 'access,add,edit,view,delete',
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'section_id' => 'Manage Orders',
        		'name' => 'Manage Orders',
        		'icon' => 'mdi-home',
        		'sequence' => 1,
        		'permissions' => 'access,add,edit,view,delete',
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        ];

        foreach ($roles as $key => $role) {
        	$roles[$key]['section_id'] = DB::table('sections')->where('name', $role['section_id'])->value('id');
        }

        DB::table('roles')->insert($roles);
    }
}

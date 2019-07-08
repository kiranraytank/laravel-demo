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
                'route' => 'admin.dashboard.index',
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
                'route' => 'admin.categories.index',
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
                'route' => 'admin.menus.index',
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
                'route' => 'admin.staff.index',
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
                'route' => 'admin.customers.index',
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
                'route' => 'admin.orders.index',
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

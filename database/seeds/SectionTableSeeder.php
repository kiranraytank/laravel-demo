<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
        	[
        		'name' => 'Dashboard',
        		'icon' => 'mdi-home',
        		'sequence' => 1,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'name' => 'Manage Categories',
        		'icon' => 'mdi-home',
        		'sequence' => 2,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'name' => 'Manage Menus',
        		'icon' => 'mdi-home',
        		'sequence' => 3,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'name' => 'Manage Users',
        		'icon' => 'mdi-home',
        		'sequence' => 4,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'name' => 'Manage Orders',
        		'icon' => 'mdi-home',
        		'sequence' => 5,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        ];

        DB::table('sections')->insert($sections);
    }
}

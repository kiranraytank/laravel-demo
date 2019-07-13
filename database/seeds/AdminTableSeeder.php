<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
        	[
        		'name' => 'Admin',
                'type' => 'admin',
        		'email' => 'admin@restro123.com',
        		'password' => Hash::make('admin@123'),
                'permissions' => serialize(getPermissions('admin')),
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        ];

        DB::table('admins')->insert($admins);
    }
}

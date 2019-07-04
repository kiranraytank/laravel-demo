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
        		'email' => 'admin@restro.com',
        		'password' => Hash::make('admin@123'),
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        ];

        DB::table('admins')->insert($admins);
    }
}

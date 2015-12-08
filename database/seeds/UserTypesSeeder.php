<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * To create UserTypesSeeder: $php artsan make:seeder UserTypesSeeder
     * Next write your seeder code in run method with table information
     * To seed from terminal: $php artisan db:seed --class=UserTypesSeeder
     */


    public function run()
    {
        DB::table('user_types')->insert([
        	['name' => 'student'],
        	['name' => 'parent'],
        	['name' => 'teacher'],
        	['name' => 'organization'],
        	]);
    }
}

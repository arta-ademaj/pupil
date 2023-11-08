<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolUserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_user_roles')->insert([
            ['name' => 'admin'],
            ['name' => 'student'],
            ['name' => 'parent'],
            ['name' => 'teacher'],
        ]);
    }
}

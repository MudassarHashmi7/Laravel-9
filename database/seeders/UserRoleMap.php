<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoles = [
            [
                'id'=> 1,
                'user_id' => 1,
                'user_role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 1,
                'user_id' => 2,
                'user_role_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 3,
                'user_id' => 3,
                'user_role_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        foreach ($userRoles as $role) {
            DB::table('role_user')->updateOrInsert(['id' => $role['id']], $role);
        }
    }
}

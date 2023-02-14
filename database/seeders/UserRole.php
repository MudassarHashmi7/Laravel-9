<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'name'=> 'entrepreneur',
                'created_at'=> Carbon::now(),
                'updated_at'=>  Carbon::now()
            ],
            [
                'id'=> 2,
                'name'=> 'agent',
                'created_at'=> Carbon::now(),
                'updated_at'=>  Carbon::now()
            ],
            [
                'id'=> 3,
                'name'=> 'Employee',
                'created_at'=> Carbon::now(),
                'updated_at'=>  Carbon::now()
]
        ];

        foreach ($userRoles as $role) {
            $newUser = \App\Models\Role::query()->updateOrCreate(['id' => $role['id']], $role);
//            $newUser->permissions()->sync([1, 2]);
        }
    }
}

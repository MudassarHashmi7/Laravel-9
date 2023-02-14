<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $userRolesPermissions = [
//            [
//                'id'=> 1,
//                'code'=> 'usman',
//                'description'=> 'hello world',
//                'created_at'=> Carbon::now(),
//                'updated_at'=>  Carbon::now()
//            ],
//            [
//                'id'=> 2,
//                'code'=> 'ali',
//                'description'=> 'hello world',
//                'created_at'=> Carbon::now(),
//                'updated_at'=>  Carbon::now()
//            ],
//            [
//                'id'=> 3,
//                'code'=> 'jutt',
//                'description'=> 'hello world',
//                'created_at'=> Carbon::now(),
//                'updated_at'=>  Carbon::now()
//            ]
//        ];
//
//        foreach ($userRolesPermissions as $permission) {
////            $newUser = \App\Models\Role::query()->updateOrInsert(['id' => $permission['id']], $permission);
//            DB::table('permissions')->updateOrInsert(['id' => $permission['id']], $permission);
//        }
//    }
//}


        $entities = [
            'entrepreneur',
            'agent',
            'Employee'];
        $permissions =
            [
                '-view-any' => 'can view any ',
            '-view' => 'can view ',
            '-create' => 'can create ',
            '-update' => 'can update ',
            '-delete' => 'can delete ',
            '-restore' => 'can restore deleted ',
        ];
//        dd(Permission::all());
        foreach ($entities as $entity) {
            foreach ($permissions as $code => $description) {
                Permission::updateOrCreate([
                    'code' => $entity . $code,
                    'description' => $description . $entity,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ]);
            }
        }
//        // Assign all permissions to entrepreneur role
        $role = Role::where('id', 1)->first();
//        dd($role);
//
////
        if ($role) {
            $role->permissions()->sync(Permission::all());
        }
//    }
//        foreach (Permission::all() as $permission)
////            dd($permissions);
//        {
//            $role->permissions()->sync($permission);
//        }
}
}





<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserRoleMap;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserRolePermissionSeeder::class,
            UserRoleSeeder::class,
            UserSeeder::class,
           // UserRoleMapSeeder::class,
        ]);
//        {
//        DB::table('users')->insert([
//            'name' => 'admin',
//            'email' => 'admin@gmail.com',
//            'password' => Hash::make('admin1234'),
//        ]);
//    }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}

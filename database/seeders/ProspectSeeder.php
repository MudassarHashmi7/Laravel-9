<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prospects = [
            [
                'id'=> 1,
                'region_id' => 1,
                'is_registered' => 1,
                'full_name' => 'admin',
                'email' => 'usman@gmail.com',
                'phone'=>  '03324870907',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 2,
                'company_name'=> 'tariq-glass',
                'job_title'=> 'manager',
                'timezone'=> 5,
                'social_linked'=> 'usman@gmail.com',
                'social_twitter'=> 'usman',
                'social_instagram'=> 'usman',
                'social_other'=> 'usman',
            ],
            [
                'id'=> 2,
                'region_id' => 3,
                'is_registered' => 1,
                'full_name' => 'ali seo',
                'email' => 'ali@gmail.com',
                'phone'=>  '03324870907',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 2,
                'company_name'=> 'tariq-glass',
                'job_title'=> 'manager',
                'timezone'=> 5,
                'social_linked'=> 'ali@gmail.com',
                'social_twitter'=> 'ali',
                'social_instagram'=> 'ali',
                'social_other'=> 'ali',
            ],
            [
                'id'=> 3,
                'region_id' => 2,
                'is_registered' => 1,
                'full_name' => 'arsal',
                'email' => 'arsal@gmail.com',
                'phone'=>  '03324870907',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 2,
                'company_name'=> 'arsal-glass',
                'job_title'=> 'manager',
                'timezone'=> 5,
                'social_linked'=> 'usman@gmail.com',
                'social_twitter'=> 'usman',
                'social_instagram'=> 'usman',
                'social_other'=> 'usman',
            ],
        ];

        foreach ($prospects as $prospect) {
             DB::table('prospects')->updateOrInsert(['id' => $prospect['id']], $prospect);

        }
    }
}

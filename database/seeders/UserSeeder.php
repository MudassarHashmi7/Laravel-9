<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        $users = [
            [
                'id'=> 1,
                'region_id' => 1,
                'stripe_account_id' => 1,
                'stripe_onboarded'=> 1,
                'account_status'=> 1,
                'current_roadmap_step'=>1,
                'photo'=> 1,
                'full_name' => 'admin',
                'phone'=>  '03324870907',
                'email' => 'usman@gmail.com',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 2,
                'company_name'=> 'tariq-glass',
                'job_title'=> 'manager',
                'timezone'=> 5,
                'tfa_enabled'=> true,
                'social_linked'=> 'usman@gmail.com',
                'social_twitter'=> 'usman',
                'social_instagram'=> 'usman',
                'social_other'=> 'usman',
                'availability_settings'=> 'yes',
                'logo'=> 121,
                'primary_color'=> 'blue',
                'secondary_color'=> 'yellow',
                'billing_address'=> 'kashif park',
                'last_login'=>Carbon::now(),
            ],
            [
                'id'=> 2,
                'region_id' => 2,
                'stripe_account_id' => 2,
                'stripe_onboarded'=> 2,
                'account_status'=> 2,
                'current_roadmap_step'=>2,
                'photo'=> 2,
                'full_name' => 'noman',
                'phone'=>  '03324870907',
                'email' => 'usman@gmail.com',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 1,
                'company_name'=> 'tariq-glass',
                'job_title'=> 'manager',
                'timezone'=> 5,
                'tfa_enabled'=> true,
                'social_linked'=> 'usman@gmail.com',
                'social_twitter'=> 'usman@gmail.com',
                'social_instagram'=> 'usman@gmail.com',
                'social_other'=> 'usman@gmail.com',
                'availability_settings'=> 'yes',
                'logo'=> 121,
                'primary_color'=> 'blue',
                'secondary_color'=> 'yellow',
                'billing_address'=> 'kashif park',
                'last_login'=>Carbon::now(),
            ],
            [
                'id'=> 3,
                'region_id' => 3,
                'stripe_account_id' => 3,
                'stripe_onboarded'=> 3,
                'account_status'=> 3,
                'current_roadmap_step'=>3,
                'photo'=> 3,
                'full_name' => 'Kashif',
                'phone'=>  '03324870907',
                'email' => 'usman@gmail.com',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 3,
                'company_name'=> 'tariq-glass',
                'job_title'=> 'manager',
                'timezone'=> 5,
                'tfa_enabled'=> true,
                'social_linked'=> 'usman@gmail.com',
                'social_twitter'=> 'usman@gmail.com',
                'social_instagram'=> 'usman@gmail.com',
                'social_other'=> 'usman@gmail.com',
                'availability_settings'=> 'yes',
                'logo'=> 121,
                'primary_color'=> 'blue',
                'secondary_color'=> 'yellow',
                'billing_address'=> 'kashif park',
                'last_login'=>Carbon::now(),
            ],
        ];

//        foreach ($users as $user) {
//            DB::table('users')->updateOrInsert(['id' => $user['id']], $user);
//        }

        foreach ($users as $user) {
            $newUser = User::query()->updateOrCreate(['id' => $user['id']], $user);
            $newUser->roles()->sync([1,2]);
        }
    }
}




///

//        $faker = Faker::create();
//        foreach (range(1,10) as $value){
//            DB::table('users')->insert([
//                'region_id' => 1,
//                'stripe_account_id' => 1,
//                'stripe_onboarded'=> 1,
//                'account_status'=> 1,
//                'current_roadmap_step'=>1,
//                'photo'=> 1,
//                'full_name' => $faker->name(),
//                'phone'=>  $faker->phoneNumber(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
//                'gender'=> $faker->name('male'),
//                 'pronouns'=> $faker->numerify,
//                'company_name'=> $faker->company(),
//            'job_title'=> $faker->jobTitle(),
//            'timezone'=> $faker->numerify,
//            'tfa_enabled'=> $faker->boolean,
//            'social_linked'=> $faker->text,
//            'social_twitter'=> $faker->text,
//            'social_instagram'=> $faker->text,
//            'social_other'=> $faker->word(),
//            'availability_settings'=> $faker->phoneNumber,
//            'logo'=> 121,
//            'primary_color'=> $faker->colorName,
//                'secondary_color'=> $faker->colorName,
//                'billing_address'=> $faker->address(),
//             'last_login'=> $faker->dateTime,
//            ]);
//        }

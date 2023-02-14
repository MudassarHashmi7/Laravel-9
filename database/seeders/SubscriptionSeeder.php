<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [
            [
                'id' => 1,
                'payee_id' => 1,
                'recipient_id' => 1,
                'subscription_term' => 'not log in',
                'is_public' => 25,
                'token'=> 'wj3ru9u932ut',
                'payment_on_signup'=> 0,
                'tax'=> 12,
                'total'=> 222,
                'description'=> "first description",
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'payee_id' => 1,
                'recipient_id' => 1,
                'subscription_term' => 'log in',
                'is_public' => 25,
                'token'=> 'wj3ru9u932ut',
                'payment_on_signup'=> 1,
                'tax'=> 12,
                'total'=> 222,
                'description'=> "first description",
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'payee_id' => 1,
                'recipient_id' => 1,
                'subscription_term' => 'log in',
                'is_public' => 25,
                'token'=> 'wj3ru9u932ut',
                'payment_on_signup'=> 0,
                'tax'=> 12,
                'total'=> 222,
                'description'=> "first description",
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($subscriptions as $subscription) {
            DB::table('subscriptions')
                ->updateOrInsert(['id' => $subscription['id']], $subscription);
        }
    }
}

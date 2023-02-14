<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionItems = [
            [
                'id' => 1,
                'subscription_id' => 2,
                'description' => 23,
                'price' => 45.5,
                'sort_order' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'subscription_id' => 1,
                'description' => 23,
                'price' => 45.5,
                'sort_order' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'subscription_id' => 1,
                'description' => 23,
                'price' => 45.5,
                'sort_order' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($subscriptionItems as $subscriptionItem) {
            DB::table('subscription_items')->updateOrInsert(['id' => $subscriptionItem['id']], $subscriptionItem);
        }
    }
}

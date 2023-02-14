<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'id' => 1,
                'invoice_id' => 1,
                'total' => 100,
                'fee' => 200,
                'stripe_data' => 'this is id 1 stripe data',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'id' => 2,
                'invoice_id' => 2,
                'total' => 200,
                'fee' => 200,
                'stripe_data' => 'this is id 2 stripe data',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'id' => 3,
                'invoice_id' => 3,
                'total' => 100,
                'fee' => 200,
                'stripe_data' => 'this is id 3 stripe data',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        ];

        foreach ($transactions as $transaction) {
            DB::table('transactions')->updateOrInsert(['id' => $transaction['id']], $transaction);
        }
    }
}

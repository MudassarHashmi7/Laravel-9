<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoiceItems = [
            [
                'id' => 1,
                'invoice_id' => 1,
                'description' => 22,
                'price' => 55,
                'sort_order' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'invoice_id' => 1,
                'description' => 22,
                'price' => 55,
                'sort_order' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'invoice_id' => 3,
                'description' => 77,
                'price' => 65,
                'sort_order' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($invoiceItems as $invoiceItem) {
            DB::table('invoice_items')->updateOrInsert(['id' => $invoiceItem['id']], $invoiceItem);
        }
    }
}

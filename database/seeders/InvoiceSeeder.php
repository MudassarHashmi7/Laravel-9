<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            [
                'id' => 1,
                'payee_id' => 1,
                'recipient_id' => 2,
                'subscription_id'=> 1,
                'appointment_id' => 2,
                'type' => 2,
                'status'=> 1,
                'tax'=> 123,
                'total'=>  122,
                'billing_address'=>'lahore',
                'description'=> 'first description',
            ],
            [
                'id' => 2,
                'payee_id' => 2,
                'recipient_id' => 1,
                'subscription_id'=> 1,
                'appointment_id' => 1,
                'type' => 2,
                'status'=> 0,
                'tax'=> 123,
                'total'=>  122,
                'billing_address'=>'housing colony',
                'description'=> 'second description',
            ],
            [
                'id' => 3,
                'payee_id' => 3,
                'recipient_id' => 3,
                'subscription_id'=> 1,
                'appointment_id' => 3,
                'type' => 2,
                'status'=> 0,
                'tax'=> 123,
                'total'=>  122,
                'billing_address'=>'islamabad',
                'description'=> 'third description',
            ],
        ];



        foreach ($invoices as $invoice) {
            DB::table('invoices')->updateOrInsert(['id' => $invoice['id']], $invoice);
        }
    }
}

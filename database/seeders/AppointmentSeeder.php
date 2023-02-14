<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments = [
            [
                'id' => 1,
                'entrepreneur_id' => 1,
                'appointment_type_id' => 1,
                'agent_id' => 1,
                'communication_type' => 'yes',
                'token'=> 'no',
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'id' => 2,
                'entrepreneur_id' => 1,
                'appointment_type_id' => 1,
                'agent_id' => 2,
                'communication_type' => 'yes',
                'token'=> 'no',
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'id' => 2,
                'entrepreneur_id' => 2,
                'appointment_type_id' => 2,
                'agent_id' => 2,
                'communication_type' => 'yes',
                'token'=> 'no',
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ];

        foreach ($appointments as $appointment) {
            DB::table('appointments')->updateOrInsert(['id' => $appointment['id']], $appointment);
        }
    }
}

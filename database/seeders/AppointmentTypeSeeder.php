<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointmentTypes = [
            [
                'id' => 1,
                'agent_id' => 1,
                'communication_type' => 1,
                'name'=> 'usman',
                'image_id'=>1,
                'description'=> 'description 1',
                'booking_message'=> 'booking_message 1',
                'length'=>1,
                'price'=>50,
                'sort_order'=> 1,
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'id' => 2,
                'agent_id' => 2,
                'communication_type' => 2,
                'name'=> 'sarmad',
                'image_id'=>2,
                'description'=> 'description 2',
                'booking_message'=> 'booking_message 1',
                'length'=>2,
                'price'=>500,
                'sort_order'=> 2,
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'id' => 3,
                'agent_id' => 3,
                'communication_type' => 1,
                'name'=> 'ali',
                'image_id'=>3,
                'description'=> 'description 3',
                'booking_message'=> 'booking_message 3',
                'length'=>1,
                'price'=>40,
                'sort_order'=> 1,
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ];

        foreach ($appointmentTypes as $appointmentType) {
            DB::table('appointment_types')->updateOrInsert(['id' => $appointmentType['id']], $appointmentType);
        }
    }

}

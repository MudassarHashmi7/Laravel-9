<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scoreboards = [
            [
                'id' => 1,
                'user_id' => 1,
                'revenue' => 50,
                'headcount' => 60,
                'revenue-per_employee' => 40,
                'profit_margin'=> 100,
                'return_on_equity'=> 12,
                'return_on_dept'=> 78,
                'gross_net_burn'=> 121,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),

            ],
            [
                'id' => 2,
                'user_id' => 2,
                'revenue' => 50,
                'headcount' => 60,
                'revenue-per_employee' => 40,
                'profit_margin'=> 100,
                'return_on_equity'=> 12,
                'return_on_dept'=> 78,
                'gross_net_burn'=> 121,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'revenue' => 50,
                'headcount' => 60,
                'revenue-per_employee' => 40,
                'profit_margin'=> 100,
                'return_on_equity'=> 12,
                'return_on_dept'=> 78,
                'gross_net_burn'=> 121,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($scoreboards as $scoreboard) {
//         $user =   User::all();

          DB::table('scoreboards')->updateOrInsert(['id' => $scoreboard['id']], $scoreboard);
//          $user->scoreboard()->save();
        }
    }
}

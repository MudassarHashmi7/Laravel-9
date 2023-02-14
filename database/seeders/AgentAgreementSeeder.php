<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentAgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agentAgreements = [
            [
                'id' => 1,
                'agent_id' => 1,
                'fee_percentage' => 50,
                'description' => 'first description',
                'document_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'agent_id' => 2,
                'fee_percentage' => 60,
                'description' => 'first description',
                'document_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'agent_id' => 3,
                'fee_percentage' => 70,
                'description' => 'first description',
                'document_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($agentAgreements as $agentAgreement) {
            DB::table('agent_agreement')->updateOrInsert(['id' => $agentAgreement['id']], $agentAgreement);
        }
    }
}

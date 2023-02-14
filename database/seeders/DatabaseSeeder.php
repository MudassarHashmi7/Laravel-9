<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserRolePermission::class,
            UserRole::class,
            UserSeeder::class,
            ScoreboardSeeder::class,

//            UserRoleMap::class,
            AppointmentSeeder::class,
            AppointmentTypeSeeder::class,
            RegionSeeder::class,
            ProspectSeeder::class,

            UserNotification::class,
            SubscriptionSeeder::class,
            InvoiceSeeder::class,
            InvoiceItemSeeder::class,
            TransactionSeeder::class,

            SubscriptionItemSeeder::class,
            RoadmapStepSeeder::class,
            ContentSeeder::class,
            MediaSeeder::class,
            AgentAgreementSeeder::class,
            EntrepreneurDocumentSeeder::class,
            ContentRegionSeeder::class,


        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

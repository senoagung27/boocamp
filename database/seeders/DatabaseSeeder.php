<?php

namespace Database\Seeders;

use App\Models\Camp;
use App\Models\CampBenefit;
use App\Models\Checkout;
use App\Models\User;
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
        // User::factory(10)->create();
        // Camp::factory(10)->create();
        // CampBenefit::factory(10)->create();
        // Checkout::factory(10)->create();
        $this->call([
            CampTableSeeder::class,
            CampBenefitTableSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}

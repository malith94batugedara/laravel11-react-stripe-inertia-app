<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('123456789')
        ]);

        Feature::create([
            'image' => 'Test User',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate Sum Of Two Numbers',
            'required_credits' => 1,
            'active' => true
        ]);

        Feature::create([
            'image' => 'Test User',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate Difference Of Two Numbers',
            'required_credits' => 3,
            'active' => true
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credit' => 20,
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credit' => 100,
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credit' => 500,
        ]);

    }
}

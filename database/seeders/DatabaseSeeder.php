<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BlockSeeder ::class,
            RoleSeeder::class ,
            AdminSeeder::class ,
            UserSeeder::class ,
            DepartmentSeeder::class,
            // PositionSeeder::class,
            // StatusSeeder::class,
            // CountrySeeder::class,
            // CitySeeder::class,
            // EmployeeSeeder::class,
            // WifeSeeder::class,
            // KidSeeder::class,
       ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

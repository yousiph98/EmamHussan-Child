<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Kid;
use App\Models\Marital;
use App\Models\Position;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Position::create([
        //     'position' => 'رئيس قسم',
        //     ]);
        // Position::create([
        //     'position' => 'معاون رئيس قسم',
        //     ]);
        // Position::create([
        //     'position' => 'مسؤول شعبة',
        //     ]);
        // Position::create([
        //     'position' => 'كاتب ذاتية',
        //     ]);
        // Status::create([
        //     'status' => 'ملاك دائم',
        //     ]);
        // Status::create([
        //     'status' => 'عقد',
        //     ]);
        // Status::create([
        //     'status' => 'اجر يومي',
        //     ]);
        // Status::create([
        //     'status' => 'متطوع',
        //     ]);
        Country::create(['name' => 'جمهورية العراق']);
        City::create([
            'name' => 'محافظة بغداد',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة البصرة',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة نينوى',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة أربيل',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة النجف',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة ذيقار',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة كركوك',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة الانبار',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة ديالى ',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة المثنى',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة القادسية',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة ميسان',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة واسط',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة صلاح الدين',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة دهوك',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة السليمانية',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة بابل',
            'country_id' => '1'
            ]);
        City::create([
            'name' => 'محافظة كربلاء',
            'country_id' => '1'
            ]);
        // Employee::factory()->count(50)->create();
        // Marital::create([
        //     'name' => fake()->name(),
        //     'mother' => fake()->name(),
        //     'country_id' => 1,
        //     'city_id' => rand(1,18),
        //     'address' => fake()->name(),
        //     'birth_date' => fake()->date(),
        //     'add_date' => fake()->date(),
        //     'block_id' => 1,
        //     'bill_id' => 1,
        //     'user_id' => 1,
        //     ]);
        // Kid::create([
        //     'name' => fake()->name(),
        //     'birth_date' => fake()->date(),
        //     'add_date' => fake()->date(),
        //     'block_id' => 1,
        //     'bill_id' => 1,
        //     'marital_id' => 1,
        //     'user_id' => 1,
        //     ]);
            

    }
}

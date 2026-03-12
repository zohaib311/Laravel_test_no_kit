<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Citie;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Seeder for Employess 

        $json = file_get_contents(base_path("database/json/employees.json"));
        $employees = json_decode($json, true);

        foreach (($employees ?? []) as $employee) {
            Employee::create([
                'name' => $employee['name'] ?? null,
                'email' => $employee['email'] ?? null,
                'phone' => $employee['phone'] ?? null,
                'address' => $employee['address'] ?? null,
                'city' => $employee['city'] ?? null,
                'country' => $employee['country'] ?? null,
                'position' => $employee['position'] ?? null,
            ]);
        }


        // Seeder for Cities 

        $json = file_get_contents(base_path("database/json/cities.json"));
        $cities = json_decode($json, true);

        foreach (($cities ?? []) as $city) {
            Citie::create([
                'city_name' => $city['city_name'] ?? null,
            ]);
        }

        // Employee::factory(15)->create();

        // for ($i = 0; $i < 10; $i++) {
        //     Employee::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->email(),
        //         'phone' => fake()->phoneNumber(),
        //         'address' => fake()->address(),
        //         'city' => fake()->city(),
        //         'country' => fake()->country(),
        //         'position' => fake()->jobTitle(),
        //     ]);
        // }
    }
}

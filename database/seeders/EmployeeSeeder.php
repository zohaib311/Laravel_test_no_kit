<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Employee::factory(5)->create();

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

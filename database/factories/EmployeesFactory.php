<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Companies;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add some dummy empolyee
            "employee_name"=> fake()->name(),
            "company_id"   => Companies::all()->random()->id,
            "employee_email"=>  fake()->unique()->safeEmail(),
            "employee_phone" => fake()->phoneNumber(),
        ];
    }
}

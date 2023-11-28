<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Truck>
 */
class TruckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'truck_brand' => $this->faker->word,
            'truck_reference' => $this->faker->word,
            'plate_number' => $this->faker->regexify('[A-Z]{3}[0-4]{3}'),
            'model' => $this->faker->year,
            'color' => $this->faker->safeColorName,
            'capacity' => $this->faker->numberBetween(1000, 10000),
            'vehicle_inspection_expiration_date' => $this->faker->date('Y/m/d'),
            'insurance_expiration_date' => $this->faker->date('Y/m/d'),
            'registration_expiration_date' => $this->faker->date('Y/m/d'),
            'status' => $this->faker->randomElements([
                'active',
                'vehicle_inspection_expired',
                'insurance_expired',
                'crashed',
                'in_maintenance'
            ])[0],
            'category_id' => function () {
                return Category::inRandomOrder()->first()->id;
            }
        ];
    }
}

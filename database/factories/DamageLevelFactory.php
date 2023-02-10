<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DamageLevel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DamageLevel>
 */
class DamageLevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = DamageLevel::class;

    public function definition()
    {
        return [
            'level'=> $this->faker->unique()->numerify('###'), 
            'name' => $this->faker->word
        ];
    }
}

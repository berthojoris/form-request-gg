<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Log;

class LogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Log::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'ip' => $this->faker->word,
            'full_url' => $this->faker->word,
            'controller_name' => $this->faker->word,
            'function_name' => $this->faker->word,
            'method_name' => $this->faker->word,
            'browser' => $this->faker->word,
        ];
    }
}

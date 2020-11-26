<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Fileupload;
use App\Models\User;

class FileuploadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fileupload::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file_name' => $this->faker->word,
            'file_ext' => $this->faker->word,
            'file_size' => $this->faker->word,
            'file_saved_path' => $this->faker->word,
            'random_name' => $this->faker->word,
            'uploaded_by' => User::all()->random(),
        ];
    }
}

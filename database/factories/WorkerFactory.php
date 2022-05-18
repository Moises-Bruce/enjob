<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xvladqt\Faker\LoremFlickrProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->withFaker()->addProvider(new LoremFlickrProvider($this->faker));

        return [
            'fullname' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'about' => $this->faker->realText(),
            'services' => $this->faker->jobTitle(),
            'whatsapp' => '92994029012',
            'image' => 'profile/' . $this->faker->image(
                storage_path('app\public\profile'),
                320,
                240,
                ['woman', 'men'],
                false
            )
        ];
    }
}

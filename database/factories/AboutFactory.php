<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'intro' => $this->faker->paragraphs(),
            'age' => $this->faker->random_int(),
            'residence' => $this->faker->country(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber(),
            'happy_clients' => $this->faker->random_int(),
            'working_hours' => $this->faker->random_int(),
            'awards' => $this->faker->random_int(),
            'cv' => null,
            'subtitle' => "Laravel Developer,Backend Developer,Api Developer,FullStack Developer"
        ];
    }
}

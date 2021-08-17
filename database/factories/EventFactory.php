<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'director_id' => 1,
            'personal_id' => rand(1, 3),
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(40),
            'date' => $this->faker->date(),
            'link' => $this->faker->url(),
            'image_url' => $this->faker->imageUrl()
        ];
    }
}

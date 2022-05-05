<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->name(),
            'requirements'  => $this->faker->name(),
            'free' => 1,
            'active' => 1,
            'description' => $this->faker->name(),
            'gender'=> 'male',
            'price' => 200.00,
            'image' => 'storage/ImageCourse/0zanQg0bKmM3okTVkI2tupPFs2ZNYf4kz1yEelwI.jpg',
            'teacher_id' => 2,
        ];
    }
}

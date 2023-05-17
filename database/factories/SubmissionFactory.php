<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'=>$this->faker->unique()->numberBetween(1,10),
            'title'=>$this->faker->sentence(mt_rand(3,5)),
            'image_file'=>"Image.jpg"
        ];
    }
}

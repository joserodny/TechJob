<?php

namespace database\factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\src\Domain\JobListing\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, api, back end',
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(4),
        ];
    }
}

<?php

namespace Database\Factories;


use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Job>
 */
class JobListingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Job::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => fake()->numberBetween(30, 60) . '.000€',
        ];
    }

    public function withEmployer(int $id): static
    {
        return $this->state(fn(array $attributes) => [
            'employer_id' => Employer::find($id)->id,
        ]);
    }
}

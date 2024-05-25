<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_code'  => $this->faker->randomKey(['abs', 'vsd']),
            'name'          => $this->faker->name(),
            'description'   => $this->faker->paragraph(2),
            'instructor'    => $this->faker->name(),
            'schedule'      => array_rand([
                1 => 'MW 8AM-12PM',
                2 => 'MW 1PM-5PM',
                3 => 'TTh 8AM-12PM',
                4 => 'TTh 1PM-5PM',
            ]),
            'prelims'       => doubleval(rand(1,5)), 
            'midterms'      => doubleval(rand(1,5)), 
            'prefinals'     => doubleval(rand(1,5)), 
            'finals'        => doubleval(rand(1,5))
        ];
    }
}
